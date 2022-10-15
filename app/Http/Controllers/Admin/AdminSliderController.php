<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\DeleteFaqRequest;
use App\Http\Requests\DeleteSlider;
use App\Models\Faq;
use App\Models\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\Slider\SliderRequest;
use App\Http\Traits\ImagesTrait;

class AdminSliderController extends Controller
{
    use ImagesTrait;

    public  function index(){
        $sliders = Slider::get();
        return view('Admin.slider.sliders' , compact('sliders'));
    }
    public function create()
    {
        return view('Admin.slider.create');
    }

    public function store(SliderRequest $request)
    {
        $fileName = time() . '-slider.png';
        $file = $request->image;
        // $file->move(public_path('images/slider'), $fileName);

        $this->uploadImage($file, $fileName, 'slider');

        Slider::create([
            'image' => $fileName
        ]);
        Alert::success('Success', 'Slider was created');
        return redirect()->back();
    }

    public function delete(DeleteSlider $request ){

        $slider =Slider::find( $request->slider_id );

        unlink(public_path($slider->image));
        $slider->delete();

        Alert::success('Success', 'slider was deleted');
        return redirect()->back() ;
    }

}

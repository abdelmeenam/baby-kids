<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Slider\DeleteSlider;
use App\Http\Requests\Slider\SliderRequest;
use App\Http\Traits\ImagesTrait;
use App\Models\Slider;
use RealRashid\SweetAlert\Facades\Alert;

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

    public  static function edit($slier_id){
        $slider =Slider::find( $slier_id);
        return view('Admin.slider.edit' , compact('slider'));
    }
    /**
     * @param \Illuminate\Http\Request $req
     * @return void
     * Upload new file
     * delete old file
     * update new file name
     */
    public function update(\Illuminate\Http\Request $req ){

        //find old image
        $slider = Slider::find($req->slider_id);
        $oldFile =  $slider->image ;

        //set new image
        $fileName = time() . '-slider.png';
        $file = $req->image;

        //upload new image
        $this->uploadImage($file , $fileName, 'slider' ,$oldFile );

        //update new image
        $slider->update([
            'image' => $fileName
        ]);

        Alert::success('Success', 'Slider was updated');
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

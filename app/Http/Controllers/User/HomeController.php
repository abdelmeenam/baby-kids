<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Home()
    {
        $sliders = Slider::get();
        // dd($sliders);
        return view('index' , compact('sliders'));


    }
}

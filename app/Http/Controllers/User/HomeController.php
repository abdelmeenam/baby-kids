<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Activity;
use App\Models\Course;
use App\Models\Faq;
use App\Models\Slider;
use App\Models\Teacher;

class HomeController extends Controller
{
    public function Home()
    {
        $sliders = Slider::get();
        $teachers = Teacher::get();
        $activities = Activity::get();
        $courses = Course::get();
        $faqs = Faq::get();
        return view('index', compact(['sliders']));


    }
}

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
        $activities = Activity::get();
        return view('User.index', compact(['sliders' , 'activities']));
    }

    public function courses()
    {
        $courses = Course::get();
        return view('User.courses', compact(['courses']));
    }

    public function teachers()
    {
        $teachers = Teacher::get();
        return view('User.teachers', compact(['teachers']));
    }



}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Activity;
use App\Models\Course;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminHomeController extends Controller
{
    public function index(){

        $admin_name =Auth::User()->name;                //how to get authUser data
        //$admin_email =Auth::User()->email;                //how to get authUser data

        $teachers = Teacher::count();
        $courses = Course::count();
        $activities = Activity::count();

        return view('Admin.index' , compact(['courses' ,'teachers' , 'activities' ]));

    }
}

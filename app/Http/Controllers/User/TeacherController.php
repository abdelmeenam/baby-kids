<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function teacher(){
        //$courses = Course::with('teacher')->get();
        //$teacher = Teacher::with('course')->first();
        //dd($teacher->course->name);
        // dd($teacher);

        //many to many
        $course  = Course::with('allTeachers')->first();
        //dd($course->allTeachers);
        foreach ($course->allTeachers as $teacher){
            dump ($teacher->name);
        }
    }
}

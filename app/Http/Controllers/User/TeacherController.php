<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function teacher(){
        //-----------One to one----------
        //$teacher = Teacher::with('course')->first();
        //dd($teacher->course->name);
        //dd($teacher);

        $courses = Course::with('teacher:id,name,course_id')->select(['id' , 'name' , 'price']) ->first();
        dd($courses);
        //------------many to many-------
        //$course  = Course::with('allTeachers')->first();
        //dd($course->allTeachers);
//        foreach ($course->allTeachers as $teacher){
//            dump ($teacher->name);
//        }
    }
}

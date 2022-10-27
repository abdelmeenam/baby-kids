<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Activity\CreateActivityRequest;
use App\Http\Requests\Activity\UpdateActivityRequest;
use App\Http\Requests\Course\CreateCourseRequest;
use App\Http\Requests\Course\DeleteCourseRequest;
use App\Http\Requests\Course\UpdateCourseRequest;
use App\Http\Traits\ImagesTrait;
use App\Models\Activity;
use App\Models\Course;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class CourseController extends Controller
{
    use ImagesTrait;
    public function index(){
        $courses = Course::get();
        return view('Admin.course.courses' , compact('courses'));
    }

    public function create(){
        return view('Admin.course.create');
    }

    public function store(CreateCourseRequest $req){
        $name = $req->name;
        $price = $req->price;
        $description = $req->description ;
        $image = $req->image ;
        $new_image_name = time() . '-Course.png';
        $this->uploadImage( $image  ,$new_image_name ,'courses' ) ;

        Course::create([
            'name' => $name ,
            'price' =>$price ,
            'description' =>$description ,
            'image' => $new_image_name

        ]);

        Alert::success('Success' , 'Course was added');
        return redirect()->back();
    }
     public function edit($course_id){
         $course = Course::find($course_id);
         return view( 'Admin.course.edit' , compact('course'));
     }

     public function update(UpdateCourseRequest $req ){
         //find old image
         $course = Course::find($req->course_id);
         $oldFile =  $course->image ;

         //set new image
         $fileName = time() . '-Activity.png';
         $file = $req->image;

         //upload new image
         $this->uploadImage($file , $fileName, 'courses' ,$oldFile );

         $name = $req->name;
         $description = $req->description;
         $price = $req->price;

         //update new image
         $course->update([
             'name' => $name ,
             'description' => $description ,
             'price' => $price ,
             'image' => $fileName
         ]);

         Alert::success('Success', 'Course was updated');
         return redirect()->back();


     }
    public function delete(DeleteCourseRequest $request){
        $Course = Course::find($request->course_id);

        unlink( public_path( $Course->image ) );
        $Course->delete();

        Alert::success('Success', 'Course was deleted');
        return redirect()->back() ;
    }
}

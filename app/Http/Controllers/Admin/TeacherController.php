<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Teacher\CreateTeacherRequest;
use App\Http\Requests\Teacher\DeleteTeacherRequest;
use App\Http\Requests\Teacher\UpdateTeacherRequest;
use App\Http\Traits\ImagesTrait;
use App\Models\Course;
use App\Models\Teacher;
use RealRashid\SweetAlert\Facades\Alert;

class TeacherController extends Controller
{
    //Image Trait
    use ImagesTrait;

    public function index()
    {
        $teachers = Teacher::with('course')->get();
        return view('Admin.teacher.teachers', compact('teachers'));
    }

    public function create()
    {
        $courses = Course::get();
        return view('Admin.teacher.create' , compact('courses'));
    }

    public function store(CreateTeacherRequest $req)
    {
        $name = $req->name;
        $description = $req->description;
        $course_id = $req->course_id;

        $image = $req->image;
        $new_icon_name = time() . '-Teacher.png';

        $this->uploadImage($image, $new_icon_name, 'teachers');
        Teacher::create([
            'name' => $name,
            'description' => $description,
            'image' => $new_icon_name,
            'course_id' => $course_id,

        ]);

        Alert::success('Success', 'Teacher was added');
        return redirect()->back();
    }

    public function edit($teacher_id)
    {
        $teacher = Teacher::find($teacher_id);
        //$coutses = Course::
        return view('Admin.teacher.edit', compact('teacher'));
    }

    public function update(UpdateTeacherRequest $req)
    {
        $teacher = Teacher::find($req->teacher_id);

        if ($req->has('image')) {
            //set new image and upload

            $oldFile = $teacher->image;
            $fileName = time() . '-Teacher.png';
            $file = $req->image;
            $this->uploadImage($file, $fileName, 'teachers', $oldFile);
        }

        $name = $req->name;
        $description = $req->description;
        $course_id = $req->course_id;

        $teacher->update([
            'name' => $name,
            'description' => $description,
            'course_id' => $course_id,
            // 'image' => (isset($fileName))? $fileName : $imageName[2]
            'image' => (isset($fileName)) ? $fileName : $teacher->getRawOriginal('image')

        ]);

        Alert::success('Success', 'Teacher was updated');
        return redirect()->back();
    }

    public function delete(DeleteTeacherRequest $request)
    {

        $Teacher = Teacher::find($request->teacher_id);

        unlink(public_path($Teacher->image));
        $Teacher->delete();

        Alert::success('Success', 'Teacher was deleted');
        return redirect()->back();

    }
}

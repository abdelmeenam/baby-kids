<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Activity\CreateActivityRequest;
use App\Http\Traits\ImagesTrait;
use App\Models\Activity;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ActivityController extends Controller
{
    use ImagesTrait;

    public function index(){
        $Activities = Activity::get();
        return view('Admin.activity.activities' , compact('Activities'));
    }

    public function create(){
        return view('Admin.activity.create');
    }

    public function store(CreateActivityRequest $req){
         $title = $req->title;
         $slug = $req->slug;
         $icon = $req->icon;

        $new_icon_name = time() . '-course.png';

        $this->uploadImage( $icon  ,$new_icon_name ,'courses' ) ;

         Activity::create([
            'title' => $title ,
            'slug' =>$slug ,
             'icon' => $new_icon_name
         ]);

         Alert::success('Success' , 'Course was added');
        return redirect()->back();
    }
}

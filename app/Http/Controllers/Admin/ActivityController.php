<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Activity\CreateActivityRequest;
use App\Http\Requests\Activity\DeleteActivityRequest;
use App\Http\Requests\Activity\UpdateActivityRequest;
use App\Http\Traits\ImagesTrait;
use App\Models\Activity;
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
        $new_icon_name = time() . '-Activity.png';

        $this->uploadImage( $icon  ,$new_icon_name ,'activities' ) ;

         Activity::create([
            'title' => $title ,
            'slug' =>$slug ,
             'icon' => $new_icon_name
         ]);

         Alert::success('Success' , 'Activity was added');
        return redirect()->back();
    }

    public function edit($activity_id){
        $Activity = Activity::find($activity_id);
        return view( 'Admin.activity.edit' , compact('Activity'));
    }

    public function update(UpdateActivityRequest $req){
        //find old image
        $activity = Activity::find($req->activity_id);
        $oldFile =  $activity->icon ;

        if ($req->has('icon')){
            //set new image and upload
            $fileName = time() . '-Activity.png';
            $file = $req->icon;
            $this->uploadImage($file , $fileName, 'activities' ,$oldFile );
        }
        $title = $req->title;
        $slug = $req->slug;

        //update new image
        $activity->update([
            'slug' => $slug ,
            'title' => $title ,
            'icon' => (isset($fileName))? $fileName : $activity->getRawOriginal('icon')
        ]);

        Alert::success('Success', 'Activity was updated');
        return redirect()->back();
    }
    public function delete(DeleteActivityRequest $request ){

       $Activity = Activity::find($request->activity_id);

       unlink( public_path( $Activity->icon ) );
       $Activity->delete();

        Alert::success('Success', 'Activity was deleted');
        return redirect()->back() ;

    }

}

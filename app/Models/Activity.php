<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;
    protected $fillable =['title' ,'slug'  , 'icon'  ];

    public static function rules(){
        return [
            'title' => 'required|min:5',
            'slug' => 'required|min:5'  ,
            'icon' => 'required'
        ];
    }

    public static function deleteActivity(){
        return [
            'activity_id' => 'required|exists:activities,id'
        ];
    }

    public function getIconAttribute($value){
        return 'images/activities/'.$value;
    }
}

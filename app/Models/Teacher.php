<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable =['name' ,'description' ,'image'  , 'course_id'  ];

    public static function rules(){
        return [
            'name' => 'required|min:5',
            'description' => 'required|min:5'  ,
            'image' => 'required'  ,
            'course_id' => 'required|exists:courses,id'
        ];
    }

    public static function deleteActivity(){
        return [
            'teacher_id' => 'required|exists:teachers,id'
        ];
    }



    public function getImageAttribute($value){
        return 'images/teachers/'.$value;
    }
}

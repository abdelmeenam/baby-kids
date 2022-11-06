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
            'course_id' => 'required'
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

    //Teacher has only one course(Reversed)
    public function course(){
        return $this->belongsTo(Course::class ,  'course_id' , 'id');
    }

}

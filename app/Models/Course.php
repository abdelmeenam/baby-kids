<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable =['name' ,'price', 'description'  ,'image' ];

    public static function rules(){
        return [
            'name' => 'required|min:5',
            'price' => 'required|min:2'  ,
            'description' => 'required|min:5'  ,
            'image' => 'required'
        ];
    }

    public static function deleteCourse(){
        return [
            'course_id' => 'required|exists:courses,id'
        ];
    }

    public function getImageAttribute($value){
        return 'images/courses/'.$value;
    }

    public function Teacher(){
        return $this->hasOne(Teacher::class ,  'course_id' , 'id');
    }

    public function allTeachers(){
        return $this->hasMany(Teacher::class , 'course_id' , 'id');
    }
}

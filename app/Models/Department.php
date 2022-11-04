<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    public function Categories(){
        //Nested Relation
       return $this->hasMany(Category::class,'department_id' , 'id')->with('Items');

    }
}

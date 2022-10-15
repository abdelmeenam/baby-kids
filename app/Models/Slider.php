<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;

    protected $fillable = ['image'];


    public static function rules()
    {
        return [
            'image' => 'required'
        ];
    }

    public function getImageAttribute($value){
        return 'images/slider/'.$value;
    }

}

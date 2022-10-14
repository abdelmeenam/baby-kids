<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    use HasFactory;
    protected $fillable = [
        'question',
        'answer',
    ];


    /**
     * @return void
     * shared function to validate the data at create or update time
     */
    public static function rules(){
        return [
            'question' => 'required|min:5',
            'answer' => 'required|min:5'
        ];
    }

    public static function deleteRule(){
        return [
            'faq_id' => 'required|exists:faqs,id',
        ];
    }
}

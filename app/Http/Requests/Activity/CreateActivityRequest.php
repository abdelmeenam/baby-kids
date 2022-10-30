<?php

namespace App\Http\Requests\Activity;

use App\Models\Activity;
use App\Models\Teacher;
use Illuminate\Foundation\Http\FormRequest;

class CreateActivityRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return  array_merge(Activity::rules() , ['icon' => 'required']);

    }
}

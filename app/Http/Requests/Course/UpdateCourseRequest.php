<?php

namespace App\Http\Requests\Course;

use App\Models\Activity;
use App\Models\Course;
use Illuminate\Foundation\Http\FormRequest;

class UpdateCourseRequest extends FormRequest
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
        return array_merge(Course::rules() ,[
            'course_id' =>'required|exists:courses,id'
        ] ) ;
    }
}

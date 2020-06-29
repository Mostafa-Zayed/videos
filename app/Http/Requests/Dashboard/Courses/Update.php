<?php

namespace App\Http\Requests\Dashboard\Courses;

use Illuminate\Foundation\Http\FormRequest;

class Update extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            //
            'name' => ['required','string','max:255','min:3'],
            'category_id' => ['required','integer'],
            'type_id'     => ['required','integer'],
            'price'       => ['required','integer'],
            'lectures'    => ['required','integer'],
            'duration'    => ['required','integer'],
            'quizzes'     => ['required','integer'],
            'pass_percentage' => ['required','integer'],
            'max_retakes'    => ['required','integer'],
            'instructors'    => ['required'],
            'describe'  => ['required','string','min:10'],
            'image'    => ['image','mimes:jpeg,png,jpg,gif','max:5000'],
        ];
    }
}

<?php

namespace App\Http\Requests\Dashboard\Certifications;

use Illuminate\Foundation\Http\FormRequest;

class Store extends FormRequest
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
            'course_id' => ['required','integer'],
            'image'    => ['image','mimes:jpeg,png,jpg,gif','max:5000'],
        ];
    }
}

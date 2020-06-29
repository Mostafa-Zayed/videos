<?php

namespace App\Http\Requests\Dashboard\Videos;

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
                'name'          =>  ['required','max:255','string'],
                'category_id'   =>  ['required','integer'],
                'course_id'     =>  ['required','integer'],
                'image'         =>  ['required','image'],
                'describe'      =>  ['required','string'],
                'meta_keywords' =>  ['max:255'],
                'meta_describe' =>  ['max:255'],
                'youtube_link'  =>  ['required','max:255','min:10','url'],
                'time'          =>  ['required','mimes:jpeg,png,jpg,gif','max:5000']
        ];
    }
}

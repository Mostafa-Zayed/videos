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
            'name' => ['required','string','max:255','min:5'],
            'category_id' => ['required','integer'],
            'youtube_link' => ['required','url','max:255'],
            'describe'    => ['required','string'],
            'meta_keywords' =>  ['max:255'],
            'meta_describe' =>  ['max:255'],
            'image'     => ['required','image','mimes:jpeg,png,jpg,gif','max:5000'],
            'published' => ['integer','in:0,1']
        ];
    }
}

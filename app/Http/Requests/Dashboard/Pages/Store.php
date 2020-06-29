<?php

namespace App\Http\Requests\Dashboard\Pages;

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
            'name' => ['required','string','min:3','max:255'],
            'describe' => ['required','string','min:3','max:255'],
            'meta_describe' => ['max:255'],
            'meta_keywords' => ['max:255']
        ];
    }
}

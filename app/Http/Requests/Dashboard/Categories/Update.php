<?php

namespace App\Http\Requests\Dashboard\Categories;

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
            'name'           => ['required', 'string', 'max:255','min:2'],
            'icon'           => ['max:255'],
            'meta_keywords'  => ['max:255'],
            'meta_describe'  => ['max:255'],
            'status'   => ['required','integer'],
        ];
    }
}

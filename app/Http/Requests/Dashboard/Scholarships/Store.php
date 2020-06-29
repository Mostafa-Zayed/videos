<?php

namespace App\Http\Requests\Dashboard\Scholarships;

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
            'name' => ['required','string','max:255','min:2'],
            'icon'  => ['required','string','max:255','min:2'],
            'describe' => ['required','string'],
            

        ];
    }
}

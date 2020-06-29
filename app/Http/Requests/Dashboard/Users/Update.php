<?php

namespace App\Http\Requests\Dashboard\Users;

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
            'name' => ['required', 'string', 'max:255','min:3'],
            'email'     => ['required', 'string', 'email', 'max:255', 'unique:users,email,'.$this->user],
            'image'    => ['image','mimes:jpeg,png,jpg,gif','max:5000'],
            'status'   => ['integer'],
            'group'    => ['required','in:user,admin']

        ];
    }
}

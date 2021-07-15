<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TestRequest extends FormRequest
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
            "name" => "required",
            "email" => "required|unique:students",
            "address" => "required"
        ];
    }
    public function messages()
{
    return [
        'name.required' => 'You can not leave name field empty',
        'email.unique' => 'This email is already in use'
    ];
}
}

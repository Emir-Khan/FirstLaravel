<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
    public function attributes()
    {
        return [
            "password"=>"Şifre",
            "email"=>"Email"
        ];
    }
    public function Messages()
    {
        return [
            "password.required"=>":attribute alanı boş bırakılamaz."
        ];
    }
    public function rules()
    {
        return [
            'password' => "required |min:3|confirmed",
            'email' => "required|email"
        ];
    }
}

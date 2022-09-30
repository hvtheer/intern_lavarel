<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class UserRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => [
                'required', 
                'min:2', 
                'regex:/^[^0-9][a-zA-Z0-9_]',
                'not_regex:/^[@#$%&*]',
            ],
            'email' => [
                'required',
                'email',
                'unique:users',
            ],
            'password' =>   [
                'required',
                'confirmed',
                'same:password_confirm',
                Password::min(8)
                    ->mixedCase()
                    ->letters()
                    ->numbers()
                    ->symbols()
                    ->uncompromised(),
            ],
            'password_confirm' => [
                'required',
            ],
            'facebook' => [
                'url',
            ],
            'youtube' => [
                'url',
            ],
        ];
    }

    public function messages()
    {
        return[
        'name.min' => 'Please, enter a text with more than 2 letters!',
        'name.not_regex' => 'Please, don\'t ente a text contain @, #, $, %, &, *!',
        'password.min' => 'Please, enter a text with at least 8 letters!',
        'facebook.url' => 'Please, enter a properly formatted url!',
        'youtube.url' => 'Please, enter a properly formatted url!',
        ];
    }

    // public function attributes()
    // {
    //     return[
    //         'name' => 'Tên người dùng'
    //     ];
    // }
}

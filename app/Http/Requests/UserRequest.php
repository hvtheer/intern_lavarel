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
                // 'regex:/[a-z]/',      // must contain at least one lowercase letter
                // 'regex:/[A-Z]/',      // must contain at least one uppercase letter
                // 'regex:/[0-9]/',      // must contain at least one digit
                // 'regex:/[@$!%*#?&]/', // must contain a special character
                'confirmed',
                'same:password_confirm',
                Password::min(8)
                    ->mixedCase()
                    ->letters()
                    ->numbers()
                    ->symbols()
                    ->uncompromised(),
            ],
            'password_confirm' => 'required',
            'facebook' =>'url',
            'youtube' => 'url',
        ];
    }

    public function messages()
    {
        return[
        'name.required' => 'Không được bỏ trống',
        'name.min' => 'Vui lòng nhập nhiều hơn 2 kí tự',
        'name.not_regex' => 'Không được nhập kí tự @, #, $, %, &, *',
        'password.required' => 'Vui lòng nhập mật khẩu',
        'password.min' => 'Nhập tối thiểu 8 kí tự',
        'facebook.url' => 'Phải đúng định dạng url',
        'youtube.url' => 'Phải đúng định dạng url',
        ];
    }

    // public function attributes()
    // {
    //     return[
    //         'name' => 'Tên người dùng'
    //     ];
    // }
}

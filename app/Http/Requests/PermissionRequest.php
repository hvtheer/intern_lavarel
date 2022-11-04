<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class PermissionRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => ['required', Rule::unique('permissions')->ignore($this->permission)],
            'key'  => ['required', Rule::unique('permissions')->ignore($this->permission)],
            'permission_group_id' => ['required', Rule::exists('permission_groups', 'id')],
        ];
    }
}

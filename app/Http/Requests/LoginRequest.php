<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'usr_email' => 'required|string',
            'usr_password' => 'required|string|min:6',
        ];
    }

    public function messages()
    {
        return [
            'usr_email.required' => 'Username wajib diisi.',
            'usr_password.required' => 'Password wajib diisi.',
            // 'usr_password.min' => 'Password minimal 6 karakter.',
        ];
    }
}

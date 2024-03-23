<?php

namespace App\Http\Requests\Auth;

use App\Rules\EmailOrUsernameExists;
use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'email_or_username' => [
                'required',
                'string',
                'max:255',
            ],
            'password' => 'required|max:255|min:8'
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'password.required' => 'Password wajib diisi',
            'password.min' => 'Password harus lebih 8 karakter',
            'password.max' => 'Password maksimal 255 karakter',
        ];
    }
}

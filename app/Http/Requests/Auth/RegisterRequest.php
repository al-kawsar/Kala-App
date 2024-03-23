<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            "name" => "required|max:255",
            "email" => "required|email|unique:users,email|max:255",
            "username" => "required|unique:users,username|max:50",
            "password" => "required|max:255|min:8|confirmed",
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
            'name.required' => 'Nama wajib di isi',
            'name.max' => 'Nama maksimal 255 karakter',
            'username.required' => 'Username wajib di isi',
            'username.unique' => 'Username sudah digunakan',
            'email.required' => 'Email wajib di isi',
            'email.unique' => 'Email sudah di gunakan',
            'email.email' => 'Email tidak valid',
            'email.max' => 'Email maksimal 255 karakter',
            'password.required' => 'Password wajib di isi',
            'password.min' => 'Password harus lebih 8 karakter',
            'password.confirmed' => 'Konfirmasi password harus sama',
        ];
    }
}

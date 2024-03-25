<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function doRegister(RegisterRequest $request)
    {
        $credentials = $request->validated();

        $user = User::create($credentials);

        Auth::login($user);

        $request->session()->regenerate();

        return to_route('posts.index')->with('success', 'Anda Berhasil Registrasi');
    }
}

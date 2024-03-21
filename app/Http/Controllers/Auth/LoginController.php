<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;

class LoginController extends Controller
{
    public function index()
    {
        return view("auth.login");
    }
    public function doLogin(LoginRequest $request)
    {
        $credentials = $request->only("email_or_username", "password");

        $field = filter_var($credentials['email_or_username'], FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        if (!auth()->attempt([$field => $credentials['email_or_username'], 'password' => $credentials['password']])) {
            return back()->withErrors([
                'email_or_username' => 'Kredensial yang diberikan tidak cocok.',
            ])->onlyInput('email_or_username');
        }

        $request->session()->regenerate();

        return redirect()->intended(route("posts.index"));
    }
}

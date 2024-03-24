<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/posts');

// Auth Logic
Route::middleware('guest')->group(function () {
    Route::controller(RegisterController::class)
        ->prefix('register')
        ->group(function () {
            Route::get('/', 'index')->name('register');
            Route::post('/', 'doRegister')->name('do-register');
        });

    Route::controller(LoginController::class)
        ->prefix('login')
        ->group(function () {
            Route::get('/', 'index')->name('login');
            Route::post('/', 'doLogin')->name('do-login');
        });

    Route::match (['get', 'post'], '/logout', LogoutController::class)
        ->name('logout')
        ->withoutMiddleware('guest')
        ->middleware('auth');

});

Route::name('posts.')
    ->controller(PostController::class)
    ->prefix('posts')
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/{post:slug}', 'show')->name('show');
    });

<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::name('posts.')
    ->controller(PostController::class)
    ->prefix('posts')
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/{post:slug}', 'show')->name('show');
    });

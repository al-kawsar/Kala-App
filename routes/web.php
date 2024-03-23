<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/posts');

Route::name('posts.')
    ->controller(PostController::class)
    ->prefix('posts')
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/{post:slug}', 'show')->name('show');
    });

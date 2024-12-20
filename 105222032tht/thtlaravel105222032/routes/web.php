<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

Route::get('/signin', function () {
    return view('auth.signin');
})->name('signin.form');

Route::get('/profile', function () {
    return view('user.profile');
})->name('profile');

Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{id}', [BlogController::class, 'show'])->name('blog.show');

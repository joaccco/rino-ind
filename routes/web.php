<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home.index');
});

Route::get('/contact', function () {
    return view('contact.index');
});

Route::get('/blog', function () {
    return view('blog.index');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('welcome');
    })->name('dashboard');
});

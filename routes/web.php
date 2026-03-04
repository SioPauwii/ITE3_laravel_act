<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage', ['name' => 'Guest', 'active' => 'home']);
})->name('homepage');

Route::get('/contact', function () {
    return view('contact', ['active' => 'contact']);
})->name('contact');

Route::get('/about', function () {
    return view('about', ['active' => 'about']);
})->name('about');

Route::get('/{name}', function ($name) {
    return view('homepage', ['name' => $name, 'active' => 'home']);
})->name('user.homepage');

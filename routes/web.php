<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/about-us', function () {
    return view('pages.about');
})->name('about');



// Route::name('home')->get('/', function () {
//     return view('pages.home');
// })->name('home');

// Route::name('about')->get('/about-us', function () {
//     return view('pages.about');
// })->name('about');

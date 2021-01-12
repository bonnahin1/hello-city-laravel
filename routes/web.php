<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'pages/home')->name('home');
Route::view('/about-us', 'pages/about')->name('about');

// Route::get('/', fn() => view('pages/home'))->name('home');
// Route::get('/about-us', fn() => view('pages/about'))->name('about');

// Route::get('/', function () {
//     return view('pages.home');
// })->name('home');

// Route::get('/about-us', function () {
//     return view('pages.about');
// })->name('about');



// Route::name('home')->get('/', function () {
//     return view('pages.home');
// })->name('home');

// Route::name('about')->get('/about-us', function () {
//     return view('pages.about');
// })->name('about');

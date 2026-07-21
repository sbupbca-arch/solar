<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/products', function () {
    return view('products');
});

Route::get('/services', function () {
    return view('service');
});

Route::get('/media', function () {
    return view('media');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/careers', function () {
    return view('careers');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::redirect('/quote', '/contact#queensolQuoteForm');
Route::redirect('/team', '/about#leadership');

Route::get('/saatvik', function () {
    return view('saatvik');
});





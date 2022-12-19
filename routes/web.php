<?php

use Illuminate\Support\Facades\Route;

// Route::get(url, action);
// Route::post(url, action);
// Route::put(url, action);
// Route::patch(url, action);
// Route::delete(url, action);

// use , namespace

// 5 pages => home, about, contact, team, services

Route::post('/', function() {
    return 'home page';
});

Route::put('/', function() {
    return 'home page';
});

Route::patch('/', function() {
    return 'home page';
});

Route::delete('/', function() {
    return 'home page';
});

Route::get('', function() {
    return 'home page - get';
});

Route::get('/about', function() {
    return 'about page';
});

Route::get('/contact', function() {
    return 'contact page';
});

Route::get('/team', function() {
    return 'team page';
});

Route::get('/services', function() {
    return 'services page';
});

// // https://bakkah.com/sessions
// https://bakkah.com/sessions/capm
// https://bakkah.com/sessions/ecba/self-study

Route::get('user/{name?}', function($name = 'online') {
    return 'user ' . $name;
});

// Route::get('user', function() {
//     return 'user';
// });

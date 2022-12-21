<?php

use Illuminate\Support\Facades\Route;

Route::prefix('admin')->name('admin.')->group(function() {
    Route::get('home', function() { return 'Admin Home'; })->name('home');
    Route::get('posts', function() { return 'Admin Posts'; })->name('posts');
    Route::get('products', function() { return 'Admin Products'; })->name('products');
    Route::get('store', function() { return 'Admin Store'; })->name('store');
    Route::get('statistics', function() { return 'Admin Statistics'; })->name('statistics');
});

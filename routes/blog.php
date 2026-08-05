<?php

use Illuminate\Support\Facades\Route;

Route::prefix('blog')->name('blog.')->group(function () {
    Route::view('/', 'pages.blog.index')->name('index');
    Route::view('/show', 'pages.blog.show')->name('show');
});

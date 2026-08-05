<?php

use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function () {
    Route::view('/', 'pages.admin.dashboard')->name('admin.dashboard');

    Route::prefix('articles')->group(function () {
        Route::view('/', 'pages.admin.articles.index')->name('articles.index');
        Route::view('/create', 'pages.admin.articles.create')->name('articles.create');
        Route::view('/show', 'pages.admin.articles.show')->name('articles.show');
    });

    Route::prefix('pages')->group(function () {
        Route::view('/', 'pages.admin.pages.index')->name('pages.index');
        Route::view('/create', 'pages.admin.pages.create')->name('pages.create');
        Route::view('/show', 'pages.admin.pages.show')->name('pages.show');
    });
});

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

    Route::prefix('categories')->group(function () {
        Route::view('/', 'pages.admin.categories.index')->name('categories.index');
        Route::view('/create', 'pages.admin.categories.create')->name('categories.create');
        Route::view('/show', 'pages.admin.categories.show')->name('categories.show');
    });

    Route::prefix('media')->name('media.')->group(function () {
        Route::view('/', 'pages.admin.media.index')->name('index');
    });

    Route::prefix('comments')->name('comments.')->group(function () {
        Route::view('/', 'pages.admin.comments.index')->name('index');
        Route::view('/{comment}', 'pages.admin.comments.show')->name('show');
    });
});

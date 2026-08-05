<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.home')->name('home');

require __DIR__.'/admin.php';

require __DIR__.'/auth.php';

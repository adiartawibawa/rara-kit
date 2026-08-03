<?php

use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function () {
    Route::view('/', 'pages.admin.dashboard')->name('admin.dashboard');
});

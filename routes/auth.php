<?php

use Illuminate\Support\Facades\Route;

Route::get('/profile', function () {
    return view('pages.auth.profile.index');
})->name('profile.show');

Route::prefix('preferences')->name('preferences.')->group(function () {
    Route::view('/', 'pages.auth.profile.preferences')->name('index');
});

<?php

use Illuminate\Support\Facades\Route;

Route::get('/profile', function () {
    return view('pages.admin.profile.index');
})->name('profile.show');

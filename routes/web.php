<?php

use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'guest');

Route::middleware('guest')->group(function () {
    Route::view('/about', 'about');
    Route::view('/contact', 'contact');

    Route::get('/login', [SessionController::class, 'create']);
});

//Auth


<?php

use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'guest');

//Auth

Route::get('/login', [SessionController::class, 'create']);

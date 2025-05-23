<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;

Route::get('/', [LandingPageController::class, 'index']);
Route::view('/autismo', 'landing.autismo');
Route::view('/pilotos', 'landing.pilotos');

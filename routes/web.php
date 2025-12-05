<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;

//Route::get('/', [LandingPageController::class, 'index']);
Route::view('/autismo', 'landing.autismo');
Route::view('/pilotos', 'landing.pilotos');
Route::view('/obrigado', 'landing.thank-you')->name('obrigado');
Route::view('/previdencia-xp', 'landing.previdencia-xp');
Route::view('/curso-financas', 'landing.curso-financas');
Route::post('/curso-financas', [LandingPageController::class, 'cursoFinancasSubmit']);
Route::view('/palova-amisses', 'landing.parceria-investimentos');
Route::post('/palova-amisses', [LandingPageController::class, 'parceriaInvestimentosSubmit']);
Route::view('/politica-privacidade', 'landing.politica-privacidade');
Route::view('/termos-condicoes', 'landing.termos-condicoes');

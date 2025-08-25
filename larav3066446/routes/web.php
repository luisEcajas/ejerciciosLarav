<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\juegoController;
Route::get('/inicio1', function () {
    return view('inicio1');
});
Route::post('juego', [juegoController::class, 'adivinar'])->name('juego.controller');
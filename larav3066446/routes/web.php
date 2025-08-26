<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\juegoController;

//Ejercicio1

Route::get('frmAdvinar', [juegoController::class,'frmAdivinarNum']);
Route::post('adivinar', [juegoController::class, 'adivinarNum'])->name('adivinar.vista');

//Ejercicio2
Route::get('frmFactorial',[juegoController::class,'frmFactorialNum']);
Route::post('factorial',[juegoController::class,'factorialNumero'])->name('factorial.calcular');
//Ejercicio 3: 

Route::get('frmNotas', [juegoController::class, 'frmNotas']);
Route::post('notas', [juegoController::class, 'notas'])->name('notas.procesar');

//Ejercicio 4: 

Route::get('frmMultiplicar', [juegoController::class, 'frmMultiplicar']);
Route::post('multiplicar', [juegoController::class, 'multiplicar'])->name('multiplicar.procesar');

//Ejercicio 5: 

Route::get('frm20Nums', [juegoController::class, 'frm20Nums']);
Route::post('20Nums', [juegoController::class, 'F20Nums'])->name('F20Nums.procesar');

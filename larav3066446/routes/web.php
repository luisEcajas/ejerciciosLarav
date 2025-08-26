<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\juegoController;

//Ejercicio1

Route::get('frmAdvinar', [juegoController::class,'frmAdivinarNum']);
Route::post('adivinar', [juegoController::class, 'adivinarNum'])->name('adivinar.vista');

//Ejercicio2
Route::get('frmFactorial',[juegoController::class,'frmFactorialNum']);
Route::get('factorial',[juegoController::class,'factorialNumero'])->name('factorial.calcular');
//Ejercicio 3: 

Route::get('frmNotas', [OperacionesController::class, 'frmNotas']);
Route::post('notas', [OperacionesController::class, 'notas'])->name('notas.procesar');

//Ejercicio 4: 

Route::get('frmMultiplicar', [OperacionesController::class, 'frmMultiplicar']);
Route::post('multiplicar', [OperacionesController::class, 'multiplicar'])->name('multiplicar.procesar');

//Ejercicio 5: 

Route::get('frm20Nums', [OperacionesController::class, 'frm20Nums']);
Route::post('20Nums', [OperacionesController::class, 'F20Nums'])->name('F20Nums.procesar');

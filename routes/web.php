<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\imcController;
use App\Http\Controllers\notaController;


Route::get('/', [imcController::class, 'index']);

Route::get('imc/calcularImc', [imcController::class, 'calcularImc']);

Route::post('/imc/store', [imcController::class, 'store'])->name('imc.store');
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\imcController;
use App\Http\Controllers\notaController;


Route::get('/', [imcController::class, 'index']);

Route::get('imc/calcularImc', [imcController::class, 'calcularImc']);


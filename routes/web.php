<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\imcController;
use App\Http\Controllers\notaController;


Route::get('/', [imcController::class, 'index']);

Route::get('imc/calcularImc', [imcController::class, 'calcularImc'])->name("imc.calcular");

Route::post('/imc/store', [imcController::class, 'store'])->name('imc.store');

Route::get('/imc/show',[imcController::class, 'show'])->name('imc.show');

Route::delete('imc/delete/{id}',[imcController::class, 'delete'])->name('imc.delete');

Route::put('imc/update/{id}', [imcController::class,'update'])->name('imc.update');
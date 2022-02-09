<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConsultaController;



Route::get('/', [ConsultaController::class, 'index']);

Route::get('/inicio', [ConsultaController::class, 'consultapdv'])->name('inicio.consultapdv');

Route::get('/inicio', [ConsultaController::class, 'consultaasc'])->name('inicio.consultaasc');

//Route::get('', [ConsultaController::class, 'index']);


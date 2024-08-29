<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CepController;

Route::get('/', function () {
    return view('index');
});

Route::get('/cep/', function () {
    return view('index');
});

Route::get('/cep/{cep}', [CepController::class, 'show'])->name('cep.get');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;

Route::get('/', function () {
    return view('home');
});

Route::post('/usuario', [UsuarioController::class, 'mostrarNome']);
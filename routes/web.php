<?php
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\PaginaController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PaginaController::class, 'inicio'])
    ->name('inicio');

Route::get('/menu', [PaginaController::class, 'menu'])
    ->name('menu');

Route::get('/contacto', [PaginaController::class, 'contacto'])
    ->name('contacto');

Route::resource('reservas', ReservaController::class)
    ->only(['index', 'create', 'store', 'destroy']);
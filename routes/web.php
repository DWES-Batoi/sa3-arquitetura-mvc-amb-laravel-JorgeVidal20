<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EquipController;
use App\Http\Controllers\EstadisController;
use App\Http\Controllers\JugadoraController;
use App\Http\Controllers\PartitController;


// Ruta de bienvenida (GET /)
Route::get('/', fn() => "Benvingut a la Guia d'Equips de Futbol Femení!");

// Genera automáticamente varias rutas REST para 'equips'
Route::resource('equips', EquipController::class);
// Genera automáticamente varias rutas REST para 'equips'
Route::resource('estadis', EstadisController::class);
Route::resource('jugadoras', JugadoraController::class);
Route::resource('partits', PartitController::class);
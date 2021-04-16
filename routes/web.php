<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PQRController;
use App\Http\Controllers\pqrsOficinaController;
use App\Http\Controllers\ClasificadoController;
use App\Http\Controllers\ClasificadoTipoController;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\EventoListaController;

Route::get('/pqrs', [PQRController::class, 'vista']);
Route::post('/pqrs', [PQRController::class, 'crear']);
Route::get('/pqrs-oficinas', [pqrsOficinaController::class, 'oficinas']);


Route::get('/clasificados', [ClasificadoController::class, 'vista']);
Route::post('/clasificados', [ClasificadoController::class, 'crear']);
Route::get('/clasificados-tipo', [ClasificadoTipoController::class, 'tipos']);

Route::get('/eventos', [EventoController::class, 'vista']);
Route::post('/eventos', [EventoController::class, 'crear']);
Route::get('/eventos-lista', [EventoListaController::class, 'lista']);
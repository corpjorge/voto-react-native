<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PQRController;
use App\Http\Controllers\pqrsOficinaController;
use App\Http\Controllers\ClasificadoController;
use App\Http\Controllers\ClasificadoTipoController;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\EventoListaController;
use App\Http\Controllers\Admin\AdminEventoController;
use App\Http\Controllers\Admin\AdminClasificadoController;
use App\Http\Controllers\Admin\AdminPqrController;


Route::get('/pqrs', [PQRController::class, 'vista']);
Route::post('/pqrs', [PQRController::class, 'crear']);
Route::get('/pqrs-oficinas', [pqrsOficinaController::class, 'oficinas']);


Route::get('/clasificados', [ClasificadoController::class, 'vista']);
Route::post('/clasificados', [ClasificadoController::class, 'crear']);
Route::get('/clasificados-tipo', [ClasificadoTipoController::class, 'tipos']);

Route::get('/eventos', [EventoController::class, 'vista']);
Route::post('/eventos', [EventoController::class, 'crear']);
Route::get('/eventos-lista', [EventoListaController::class, 'lista']);


Route::get('/admin/pqrs', [AdminPqrController::class, 'vista']);
Route::get('/admin/pqrs/datos', [AdminPqrController::class, 'datos']);
Route::get('/admin/pqrs/editar/{id}', [AdminPqrController::class, 'editar']);
Route::post('/admin/pqrs/atender/{id}', [AdminPqrController::class, 'atender']);
Route::post('/admin/pqrs/cerrar/{id}', [AdminPqrController::class, 'cerrar']);


Route::get('/admin/clasificados', [AdminClasificadoController::class, 'vista']);


Route::get('/admin/eventos', [AdminEventoController::class, 'vista']);
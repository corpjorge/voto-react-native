<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PQRController;

Route::get('/pqrs', [PQRController::class, 'vista']);
Route::post('/pqrs', [PQRController::class, 'crear']);
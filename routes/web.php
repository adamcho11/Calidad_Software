<?php

use App\Http\Controllers\PersonaController;
use Illuminate\Support\Facades\Route;

// Sampler 1: El GET que JMeter usará para extraer el token
Route::get('/personas/create', function () {
    return '<html><body><form><input type="hidden" name="_token" value="' . csrf_token() . '"></form></body></html>';
});

// Sampler 2: El POST que procesa el registro
Route::post('/personas', [PersonaController::class, 'store']);
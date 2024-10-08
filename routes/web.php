<?php

use App\Http\Controllers\CalificacionesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/deficiencias', function () {
    return view('deficiencias');
});

Route::get('/calificaciones/redirect', [CalificacionesController::class, 'handleRedirect'])->name('calificaciones.redirect');

Route::post('/guardar-calificacion', [CalificacionesController::class, 'handleRedirect'])->name('guardar.calificacion');

<?php

use App\Http\Controllers\AlumnosController;
use App\Http\Controllers\AsistenciaController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\CursosController;
use App\Http\Controllers\DocentesController;
use App\Http\Controllers\MatriculaController;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::controller(MatriculaController::class)->group(function(){
    Route::get('/matriculas','index');
});

Route::controller(AsistenciaController::class)->group(function(){
    Route::get('/asistencia','index');
});
Route::controller(CursosController::class)->group(function(){
    Route::get('/cursos','index');
    Route::post('/cursos','store');
    Route::put('/cursos/{id}','update');
    Route::delete('/cursos/{id}','delete');

});
Route::controller(AlumnosController::class)->group(function(){
    Route::get('/alumnos','index');
    Route::post('/alumnos','store');
    Route::put('/alumnos/{id}','update');
    Route::delete('/alumnos/{id}','delete');

});
Route::controller(DocentesController::class)->group(function(){
    Route::get('/docentes','index');
    Route::post('/docentes','store');
    Route::put('/docentes/{id}','update');
    Route::delete('/docentes/{id}','delete');
});

<?php

use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\PersonaController;
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
Route::apiResource('estudiante', EstudianteController::class);
Route::apiResource('persona', PersonaController::class);

Route::get('/buscapersona/{cedula}',[PersonaController::class,'buscapersona']);
/*Route::apiResource(PersonaController::class)->group(function(){
    Route::get('/buscapersona/{cedula}','buscapersona');
});*/


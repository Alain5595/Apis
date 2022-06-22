<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\v1\PacienteController;
use App\Http\Controllers\v1\SecurityController;
use App\Http\Controllers\v1\UsersController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
/*
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
*/
Route::post('/v1/seguridad/login',[SecurityController::class,'login']);
Route::post('/v1/users',[UsersController::class,'users']);

Route::get('/v1/paciente',[PacienteController::class,'getAll']);
Route::get('/v1/paciente/{id}',[PacienteController::class,'getItem']);
Route::post('/v1/paciente',[PacienteController::class,'store']);
Route::put('/v1/paciente',[PacienteController::class,'putUpdate']);
Route::patch('/v1/paciente',[PacienteController::class,'patchUpdate']);
Route::delete('/v1/paciente/{id}',[PacienteController::class,'delete']);

Route::middleware(['auth:api'])->group(function () {

});

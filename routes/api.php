<?php

// Aquí en api.php se trabajan todas las consultas de backend

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;

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

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    //return $request->user();
//});

Route::get('/categoria',[CategoriaController::class,'getCategoria']);
Route::get('/categoria/{id}',[CategoriaController::class,'getCategoriaid']);

// post
Route::post('/categoria/insert',[CategoriaController::class,'insertCategoria']);

// put update:
Route::put('/categoria/update/{id}',[CategoriaController::class,'updateCategoria']);

// delete:
Route::delete('/categoria/delete/{id}',[CategoriaController::class,'deleteCategoria']);
<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CategoryController;


use App\Http\Controllers\ProductoController;





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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::get('/articulos', 'App\Http\Controllers\ArticuloControllers@index'); // mostrar todos los registros
// Route::post('/articulos', 'App\Http\Controllers\ArticuloControllers@store'); // crear un registro
// Route::put('/articulos/{id}', 'App\Http\Controllers\ArticuloControllers@update'); // actualizar un registro
// Route::delete('/articulos/{id}', 'App\Http\Controllers\ArticuloControllers@destroy'); // crear un registro




Route::group(['middleware' => ['web']], function () {
    // your routes here
    // LOGIN
    // Route::post('/login', [LoginController::class, 'login']);

    Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
        return $request->user();
    });
    
    // CATEGORIAS
    Route::get('/categoria/obtenerTodos', [CategoryController::class,'index']);
    // Route::get('/categoria/obtenerTodosSelect', [CategoriaController::class,'getTodosSelect']);
    // Route::get('/categoria/obtenerDatos/{id}', [CategoriaController::class,'getDatos']);
    // Route::post('/categoria/crear', [CategoriaController::class,'crear']);
    // Route::put('/categoria/actualizar/{id}', [CategoriaController::class,'actualizar']);
    // Route::delete('/categoria/eliminar/{id}', [CategoriaController::class,'eliminar']);
 
    // MI CUENTA
    Route::get('/mi-cuenta/obtenerDatos/{id}', [LoginController::class,'getDatos']);







    


});

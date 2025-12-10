<?php

use App\Http\Controllers\AccesorioController;
use App\Http\Controllers\api\LoginController;
use App\Http\Controllers\api\RegisterController;
use App\Http\Controllers\MecanicoController;
use App\Http\Controllers\OrdenController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::prefix('admin')->group(function(){
    Route::post('/login', [LoginController::class, 'admin']);
    // Route::post('/forgot-password', 'UserController@forgotPassword');
});

// Route::post('/login', 'api\LoginController@pacienteMedico');
// Route::post('/send-code', 'UserController@sendCodeToEmail');
// Route::post('/validate-code', 'UserController@validateCode');
// Route::middleware('auth:api')->post('/change-password/{id}', 'UserController@changePassword');

Route::middleware('auth:sanctum')->prefix('admin')->group(function(){
    Route::post('/register', [RegisterController::class, 'admin']);
    Route::get('/list', [UserController::class, 'apiList']);
    Route::get('/show/{id}', [UserController::class, 'apiShow']);
    Route::put('/update/{id}', [UserController::class, 'apiUpdate']);
    Route::patch('/update-email/{id}', [UserController::class, 'apiUpdateEmail']);
    Route::patch('/update-password/{id}', [UserController::class, 'updatePassword']);
    Route::delete('/delete/{id}', [UserController::class, 'delete']);
    Route::delete('/restore/{id}', [UserController::class, 'restore']);
    Route::post('/set-playerid', [UserController::class, 'updatePlayerId']);
});

//mecanicos
Route::middleware('auth:sanctum')->prefix('/mecanico')->group(function(){
    Route::post('/create', [MecanicoController::class, 'store']);
    Route::get('/all', [MecanicoController::class, 'index']);
    Route::get('/show/{id}', [MecanicoController::class, 'show']);
    Route::put('/update/{id}', [MecanicoController::class, 'update']);
    Route::delete('/delete/{id}', [MecanicoController::class, 'delete']);
    Route::delete('/restore/{id}', [MecanicoController::class, 'restore']);
    Route::get('/todos', [MecanicoController::class, 'todos']);
});

//ordenes
Route::middleware('auth:sanctum')->prefix('/orden')->group(function(){
    Route::post('/create', [OrdenController::class, 'store']);
    Route::get('/all', [OrdenController::class, 'index']);
    Route::get('/show/{id}', [OrdenController::class, 'show']);
    Route::put('/update/{id}', [OrdenController::class, 'update']);
    Route::delete('/delete/{id}', [OrdenController::class, 'delete']);
    Route::delete('/restore/{id}', [OrdenController::class, 'restore']);
    Route::post('/detalle/create', [OrdenController::class, 'createDetalleRepuesto']);
    // mano de obra
    Route::post('/detalle/manoobra', [OrdenController::class, 'createDetalleManoObra']);
    Route::put('/detalle/editmanoobra/{id}', [OrdenController::class, 'editDetalleManoObra']);
    Route::delete('/detalle/deletemanoobra/{id}', [OrdenController::class, 'deleteDetalleManoObra']);
    Route::delete('/detalle/restoremanoobra/{id}', [OrdenController::class, 'restoreDetalleManoObra']);
    // repuestos
    Route::post('/detalle/add-repuesto', [OrdenController::class, 'createDetalleRepuesto']);
    Route::put('/detalle/edit-repuesto/{id}', [OrdenController::class, 'editDetalleRepuesto']);
    Route::delete('/detalle/delete-repuesto/{id}', [OrdenController::class, 'deleteDetalleRepuesto']);
    Route::delete('/detalle/restore-repuesto/{id}', [OrdenController::class, 'restoreDetalleRepuesto']);
    // ordenes similares del vehiculo
    Route::get('/similares/{id}', [OrdenController::class, 'ordenesSimilares']);
});

//ordenes
Route::middleware('auth:sanctum')->prefix('/accesorio')->group(function(){
    Route::post('/create', [AccesorioController::class, 'store']);
    Route::get('/all', [AccesorioController::class, 'index']);
    Route::get('/todos', [AccesorioController::class, 'todos']);
    Route::get('/show/{id}', [AccesorioController::class, 'show']);
    Route::put('/update/{id}', [AccesorioController::class, 'update']);
    Route::delete('/delete/{id}', [AccesorioController::class, 'delete']);
    Route::delete('/restore/{id}', [AccesorioController::class, 'restore']);
});

// //ordenes
// Route::prefix('/accesorio')->group(function(){
//     Route::middleware('auth:api')->post('/create', [AccesorioController::class, 'store']);
//     Route::middleware('auth:api')->get('/all', [AccesorioController::class, 'index']);
//     Route::middleware('auth:api')->get('/show/{id}', [AccesorioController::class, 'show']);
//     Route::middleware('auth:api')->put('/update/{id}', [AccesorioController::class, 'update']);
//     Route::middleware('auth:api')->delete('/delete/{id}', [AccesorioController::class, 'delete']);
//     Route::middleware('auth:api')->delete('/restore/{id}', [AccesorioController::class, 'restore']);
// });
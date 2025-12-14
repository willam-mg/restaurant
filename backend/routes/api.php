<?php

use App\Http\Controllers\AccesorioController;
use App\Http\Controllers\AdministratorController;
use App\Http\Controllers\api\LoginController;
use App\Http\Controllers\api\RegisterController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CashMovementController;
use App\Http\Controllers\CashRegisterController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\MecanicoController;
use App\Http\Controllers\OrdenController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\UserController;
use App\Models\CashMovement;
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

// Auth
Route::prefix('auth')->group(function () {
    // Route::post('/send-code', [AuthController::class, 'sendCodeVerification']);
    // Route::post('/cliente', [AuthController::class, 'signInRider']);
    // Route::post('/taxi', [AuthController::class, 'singInDriver']);
    Route::post('/administrator', [AuthController::class, 'signInAdmin']);
});

// Administrador
Route::middleware('auth:sanctum')->prefix('administrators')->group(function () {
    Route::apiResource('/', AdministratorController::class)
        ->parameters(['' => 'id']);
    Route::post('{id}/restore', [AdministratorController::class, 'restore']);
    Route::patch('{id}/change-password', [AdministratorController::class, 'changePassword']);
});

// Tables
Route::middleware('auth:sanctum')->prefix('tables')->group(function () {
    Route::apiResource('/', TableController::class)
        ->parameters(['' => 'id']);
    Route::post('{id}/restore', [TableController::class, 'restore']);
});

// Cactegory
Route::middleware('auth:sanctum')->prefix('categories')->group(function () {
    Route::apiResource('/', CategoryController::class)
        ->parameters(['' => 'id']);
    Route::post('{id}/restore', [CategoryController::class, 'restore']);
});

// Cactegory
Route::middleware('auth:sanctum')->prefix('categories')->group(function () {
    Route::apiResource('/', CategoryController::class)
        ->parameters(['' => 'id']);
    Route::post('{id}/restore', [CategoryController::class, 'restore']);
});

// CashRegister
Route::middleware('auth:sanctum')->prefix('cash-registers')->group(function () {
    Route::apiResource('/', CashRegisterController::class)
        ->parameters(['' => 'id']);
    Route::post('{id}/restore', [CashRegisterController::class, 'restore']);
});

// CashMovement
Route::middleware('auth:sanctum')->prefix('cash-movements')->group(function () {
    Route::apiResource('/', CashMovementController::class)
        ->parameters(['' => 'id']);
    Route::post('{id}/restore', [CashMovementController::class, 'restore']);
});

// Customer
Route::middleware('auth:sanctum')->prefix('customers')->group(function () {
    Route::apiResource('/', CustomerController::class)
        ->parameters(['' => 'id']);
    Route::post('{id}/restore', [CustomerController::class, 'restore']);
});

// Order
Route::middleware('auth:sanctum')->prefix('orders')->group(function () {
    Route::apiResource('/', OrderController::class)
        ->parameters(['' => 'id']);
    Route::post('{id}/restore', [OrderController::class, 'restore']);
});

// Payment
Route::middleware('auth:sanctum')->prefix('payments')->group(function () {
    Route::apiResource('/', PaymentController::class)
        ->parameters(['' => 'id']);
    Route::post('{id}/restore', [PaymentController::class, 'restore']);
});

// Product
Route::middleware('auth:sanctum')->prefix('products')->group(function () {
    Route::apiResource('/', ProductController::class)
        ->parameters(['' => 'id']);
    Route::post('{id}/restore', [ProductController::class, 'restore']);
});
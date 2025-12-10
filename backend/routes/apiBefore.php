<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppVersionController;
use App\Http\Controllers\ConstantsController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\TaxiController;
use App\Http\Controllers\AdministratorController;
use App\Http\Controllers\AskQuestionController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CarModelController;
use App\Http\Controllers\ObservacionController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\ViajeController;
use App\Http\Controllers\ConfiguracionController;
use App\Http\Controllers\ComprobanteController;
use App\Http\Controllers\QrController;
use App\Http\Controllers\ReceiptLogController;
use App\Services\FirebaseService;
use App\Services\Helpers\SocketioService;
use Psr\Log\LoggerInterface;

Route::prefix('versions')->group(function () {
    Route::get('/', [AppVersionController::class, 'index']);
    Route::post('/', [AppVersionController::class, 'store']);
    Route::get('/{id}', [AppVersionController::class, 'show']);
    Route::put('/{id}', [AppVersionController::class, 'update']);
    Route::delete('/{id}', [AppVersionController::class, 'destroy']);
    Route::patch('/{id}', [AppVersionController::class, 'restore']);
});

Route::prefix('constants')->group(function () {
    Route::get('/', [ConstantsController::class, 'index']);
});

// Auth
Route::prefix('auth')->group(function () {
    Route::post('/send-code', [AuthController::class, 'sendCodeVerification']);
    Route::post('/cliente', [AuthController::class, 'signInRider']);
    Route::post('/taxi', [AuthController::class, 'singInDriver']);
    Route::post('/administrador', [AuthController::class, 'singInAdmin']);
});

// Cliente
Route::middleware('auth:sanctum')->prefix('clientes')->group(function () {
    Route::get('/', [ClienteController::class, 'index']);
    Route::post('/', [ClienteController::class, 'store']);
    Route::get('/{id}', [ClienteController::class, 'show']);
    Route::put('/{id}', [ClienteController::class, 'update']);
    Route::delete('/{id}', [ClienteController::class, 'deleteAccountRider']);
    Route::patch('/{id}', [ClienteController::class, 'restore']);
    Route::post('/oferta-recomendada', [ClienteController::class, 'ofertaRecomendada']);
    Route::post('/taxis-disponibles', [ClienteController::class, 'taxisDisponibles']);
    Route::post('/confirmar-viaje', [ClienteController::class, 'confirmarViaje']);
    Route::post('/descartar-viaje', [ClienteController::class, 'descartarViajeTaxi']);
    Route::post('/cancelar-viaje', [ClienteController::class, 'cancelarViaje']);
    Route::post('/finalizar-viaje', [ClienteController::class, 'finalizarViaje']);
    Route::post('/calificar-viaje', [ClienteController::class, 'calificarViaje']);
    Route::get('/{id}/viajes', [ClienteController::class, 'misViajes']);
    Route::post('/on-my-way', [ClienteController::class, 'setOnMyWay']);
    // Route::delete('/delete-account/{id}', [ClienteController::class, 'deleteAccountRider']);
});

// Taxis
Route::middleware('auth:sanctum')->prefix('taxis')->group(function () {
    Route::get('/', [TaxiController::class, 'index']);
    Route::post('/', [TaxiController::class, 'store']);
    Route::get('/{id}', [TaxiController::class, 'show']);
    Route::put('/{id}', [TaxiController::class, 'update']);
    Route::delete('/{id}', [TaxiController::class, 'deleteAccountDriver']);
    Route::patch('/{id}', [TaxiController::class, 'restore']);
    Route::get('/{id}/viajes', [TaxiController::class, 'misViajes']);
    Route::put('/approve/{id}', [TaxiController::class, 'approve']);
    Route::patch('/patch/{id}', [TaxiController::class, 'patch']);
    Route::post('/aplicar', [TaxiController::class, 'applyToViaje']);
    Route::post('/descartar-viaje', [TaxiController::class, 'descartarViajeTaxi']);
    Route::post('/recoger-cliente', [TaxiController::class, 'recogerCliente']);
    Route::post('/cancelar-viaje', [TaxiController::class, 'cancelarViaje']);
    Route::post('/acaba-de-llegar', [TaxiController::class, 'acabaDeLlegar']);
    Route::post('/iniciar-viaje', [TaxiController::class, 'iniciarViaje']);
    Route::post('/finalizar-viaje', [TaxiController::class, 'finalizarViaje']);
    Route::post('/update-position/{id}', [TaxiController::class, 'updatePosition']);
    Route::get('/my-receipts/{id}', [TaxiController::class, 'myReceipts']);
});

// Administrador
Route::middleware('auth:sanctum')->prefix('administradores')->group(function () {
    Route::get('/', [AdministratorController::class, 'index']);
    Route::post('/', [AdministratorController::class, 'store']);
    Route::get('/{id}', [AdministratorController::class, 'show']);
    Route::put('/{id}', [AdministratorController::class, 'update']);
    Route::delete('/{id}', [AdministratorController::class, 'destroy']);
    Route::patch('/{id}', [AdministratorController::class, 'restore']);
    Route::patch('change-password/{id}', [AdministratorController::class, 'changePassword']);
});

// Observaciones
Route::middleware('auth:sanctum')->prefix('observaciones')->group(function () {
    Route::get('/', [ObservacionController::class, 'index']);
    Route::get('/list', [ObservacionController::class, 'list']);
    Route::get('/pendientes', [ObservacionController::class, 'pendientes']);
    Route::get('/atendidas', [ObservacionController::class, 'atendidas']);
    Route::post('/', [ObservacionController::class, 'store']);
    Route::get('/{id}', [ObservacionController::class, 'show']);
    Route::put('/{id}', [ObservacionController::class, 'update']);
    Route::delete('/{id}', [ObservacionController::class, 'destroy']);
    Route::patch('/{id}', [ObservacionController::class, 'restore']);
});

// Empresa
Route::middleware('auth:sanctum')->prefix('empresas')->group(function () {
    Route::get('/', [EmpresaController::class, 'index']);
    Route::post('/', [EmpresaController::class, 'store']);
    Route::get('/{id}', [EmpresaController::class, 'show']);
    Route::put('/{id}', [EmpresaController::class, 'update']);
    Route::delete('/{id}', [EmpresaController::class, 'destroy']);
    Route::patch('/{id}', [EmpresaController::class, 'restore']);
});

// Viaje
Route::middleware('auth:sanctum')->prefix('viajes')->group(function () {
    Route::get('/', [ViajeController::class, 'index']);
    Route::get('/by-position', [ViajeController::class, 'listByPosition']);
    Route::post('/', [ViajeController::class, 'store']);
    Route::get('/{id}', [ViajeController::class, 'show']);
    Route::put('/{id}', [ViajeController::class, 'update']);
    Route::delete('/{id}', [ViajeController::class, 'destroy']);
    Route::patch('/{id}', [ViajeController::class, 'restore']);
});

// Configuracion
Route::middleware('auth:sanctum')->prefix('configuraciones')->group(function () {
    Route::get('/active', [ConfiguracionController::class, 'showActive']);
    Route::get('/', [ConfiguracionController::class, 'index']);
    Route::post('/', [ConfiguracionController::class, 'store']);
    Route::get('/{id}', [ConfiguracionController::class, 'show']);
    Route::put('/{id}', [ConfiguracionController::class, 'update']);
    Route::delete('/{id}', [ConfiguracionController::class, 'destroy']);
    Route::patch('/{id}', [ConfiguracionController::class, 'restore']);
});

// Comprobantes
Route::middleware('auth:sanctum')->prefix('comprobantes')->group(function () {
    Route::get('/', [ComprobanteController::class, 'index']);
    Route::post('/', [ComprobanteController::class, 'store']);
    Route::get('/{id}', [ComprobanteController::class, 'show']);
    Route::put('/{id}', [ComprobanteController::class, 'update']);
    Route::put('/verificar/{id}', [ComprobanteController::class, 'verificar']);
    Route::delete('/{id}', [ComprobanteController::class, 'destroy']);
    Route::patch('/{id}', [ComprobanteController::class, 'restore']);
});

// QR
Route::prefix('qrs')->group(function () {
    Route::get('/current', [QrController::class, 'currentQr']);
    Route::get('/', [QrController::class, 'index']);
    Route::post('/', [QrController::class, 'store']);
    Route::get('/{id}', [QrController::class, 'show']);
    Route::put('/{id}', [QrController::class, 'update']);
    Route::put('/verificar/{id}', [QrController::class, 'verificar']);
    Route::delete('/{id}', [QrController::class, 'destroy']);
    Route::patch('/{id}', [QrController::class, 'restore']);
});

Route::middleware('auth:sanctum')->prefix('charts')->group(function () {
    Route::get('/viajes-vs-date', [ViajeController::class, 'getViajesVsDateToChart']);
});

// Quality Control
Route::prefix('testing')->group(function () {
    Route::post('/socketio', [ViajeController::class, 'testSocketio']);
});


// Brands
Route::middleware('auth:sanctum')->prefix('brands')->group(function () {
    Route::get('/', [BrandController::class, 'index']);
    Route::get('/all', [BrandController::class, 'listAll']);
    Route::post('/', [BrandController::class, 'store']);
    Route::get('/{id}', [BrandController::class, 'show']);
    Route::put('/{id}', [BrandController::class, 'update']);
    Route::delete('/{id}', [BrandController::class, 'destroy']);
    Route::patch('/{id}', [BrandController::class, 'restore']);
});

// CarModel
Route::middleware('auth:sanctum')->prefix('car-models')->group(function () {
    Route::get('/', [CarModelController::class, 'index']);
    Route::get('/all', [CarModelController::class, 'listAll']);
    Route::post('/', [CarModelController::class, 'store']);
    Route::get('/{id}', [CarModelController::class, 'show']);
    Route::put('/{id}', [CarModelController::class, 'update']);
    Route::delete('/{id}', [CarModelController::class, 'destroy']);
    Route::patch('/{id}', [CarModelController::class, 'restore']);
});


// Comprobantes
Route::middleware('auth:sanctum')->prefix('receipts-log')->group(function () {
    Route::get('/', [ReceiptLogController::class, 'index']);
    Route::get('/by-receipt/{id}', [ReceiptLogController::class, 'listByReceipt']);
    Route::post('/', [ReceiptLOgController::class, 'store']);
    Route::get('/{id}', [ReceiptLOgController::class, 'show']);
    Route::put('/{id}', [ReceiptLOgController::class, 'update']);
    Route::delete('/{id}', [ReceiptLOgController::class, 'destroy']);
    Route::patch('/{id}', [ReceiptLOgController::class, 'restore']);
});

// Questtion & answer
Route::middleware('auth:sanctum')->prefix('ask-questions')->group(function () {
    Route::get('/', [AskQuestionController::class, 'index']);
    Route::post('/', [AskQuestionController::class, 'store']);
    Route::get('/{id}', [AskQuestionController::class, 'show']);
    Route::put('/{id}', [AskQuestionController::class, 'update']);
    Route::delete('/{id}', [AskQuestionController::class, 'destroy']);
    Route::patch('/{id}', [AskQuestionController::class, 'restore']);
});

// Load test 
Route::get('/test-firebase', function (FirebaseService $firebase, LoggerInterface $logger) {
    $path = 'test/node';
    $data = ['time' => now()->toDateTimeString()];
    try {
        $firebase->updateNode($path, $data);
        return response()->json(['status' => 'ok']);
    } catch (\Exception $e) {
        return response()->json(['status' => 'error', 'msg' => $e->getMessage()], 500);
    }
});

Route::get('/test-socketio', function (SocketioService $socketio, LoggerInterface $logger) {
    try {
        $socketio->emmitToDriver('taxis', [
            'time' => now()->toDateTimeString()
        ]);
        return response()->json(['status' => 'ok']);
    } catch (\Exception $e) {
        return response()->json(['status' => 'error', 'msg' => $e->getMessage()], 500);
    }
});
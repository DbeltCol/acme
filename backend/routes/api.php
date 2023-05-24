<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\VehicleController;
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

Route::post('login', [AuthController::class,'login']);

Route::group(['middleware' => 'auth:api'], function(){
    Route::post('user', [AuthController::class,'user']);


    Route::get('vehiculos', [VehicleController::class,'getVehicles']);
    Route::get('reporte', [VehicleController::class,'report']);
    Route::get('conductores', [DriverController::class,'getDrivers']);
    Route::get('propietarios', [OwnerController::class,'getOwners']);

    Route::post('conductores', [DriverController::class,'store']);
    Route::post('propietarios', [OwnerController::class,'store']);
});

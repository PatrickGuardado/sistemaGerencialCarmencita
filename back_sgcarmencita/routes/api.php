<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/


Route::post('login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('user', [AuthController::class, 'userInfo']);
    Route::post('logout', [AuthController::class, 'logout']);
});


Route::middleware(['auth:sanctum', 'role:Administrador'])->group(function () {
    Route::get('admin-route', function () {
        return response()->json(['message' => 'Welcome Admin']);
    });
});

Route::middleware(['auth:sanctum', 'role:Usuario Técnico'])->group(function () {
    Route::get('technical-route', function () {
        return response()->json(['message' => 'Welcome Technical User']);
    });
});

Route::middleware(['auth:sanctum', 'role:Usuario Estratégico'])->group(function () {
    Route::get('strategic-route', function () {
        return response()->json(['message' => 'Welcome Strategic User']);
    });
});

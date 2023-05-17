<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\RecordController;
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
Route::post('login', [AuthController::class, 'login']);
Route::post('register', [AuthController::class, 'register']);
Route::get('unauthenticated', [AuthController::class, 'unauthenticated'])->name('unauthenticated');

Route::group(["middleware" => ["auth:sanctum", "cors"]], function () {
    Route::resource('records', RecordController::class)->only('index', 'store', 'show', 'update', 'destroy');
    Route::post('logout', [AuthController::class, 'logout'])->name("log-out");
});



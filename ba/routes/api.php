<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Laravel\Jetstream\Http\Controllers\AuthenticatedSessionController;


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
Route::get('/index', [App\Http\Controllers\IfDoctorPresentController::class, 'index'])->name('index');
Route::post('/store', [App\Http\Controllers\IfDoctorPresentController::class, 'store'])->name('store');

Route::get('/destroy.s/{id}', [App\Http\Controllers\ScheduleController::class, 'destroy'])->name('destroy.s');




<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::get('/index', [App\Http\Controllers\IfDoctorPresentController::class, 'index'])->name('index');
Route::post('/store', [App\Http\Controllers\IfDoctorPresentController::class, 'store'])->name('store');


Route::get('/index.s', [App\Http\Controllers\ScheduleController::class, 'index'])->name('index.s');


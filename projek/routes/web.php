<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MatkulController;
use App\Http\Controllers\AuthController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', [AuthController::class, 'login'])->name('login');
Route::post('/postlogin', [AuthController::class, 'postlogin']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::group(['middleware' => 'auth'], function(){
    Route::get('/matkul', [MatkulController::class, 'index']);
    Route::post('/matkul/create', [MatkulController::class, 'create']);
    Route::get('/matkul/{kode}/edit', [MatkulController::class, 'edit']);
    Route::post('/matkul/{kode}/update', [MatkulController::class, 'update']);
});


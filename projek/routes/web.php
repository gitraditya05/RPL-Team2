<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MatkulController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ForumController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', [AuthController::class, 'login'])->name('login');
Route::post('/postlogin', [AuthController::class, 'postlogin']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::group(['middleware' => ['auth','checkRole:admin']], function(){
    Route::post('/matkul/create', [MatkulController::class, 'create']);
    Route::get('/matkul/{id}/edit', [MatkulController::class, 'edit']);
    Route::post('/matkul/{id}/update', [MatkulController::class, 'update']);
    Route::get('/matkul/{id}/delete', [MatkulController::class, 'delete']);
    
});

Route::get('/matkul', [MatkulController::class, 'index']);
Route::get('/forum', [ForumController::class, 'index']);
Route::post('/forum/create', [ForumController::class, 'create']);
Route::get('/forum/{forum}/view', [ForumController::class, 'view']);
Route::post('/forum/{forum}/view', [ForumController::class, 'postkomentar']);

Route::get('/profilsaya', [ProfilController::class, 'index']);
Route::post('/profilsaya', [ProfilController::class, 'update']);

// Route::group(['middleware' => ['auth','checkRole:admin,mahasiswa']], function(){
//     Route::get('/matkul', [MatkulController::class, 'index']);
//     Route::get('/forum', [ForumController::class, 'index']);
//     Route::post('/forum/create', [ForumController::class, 'create']);
//     Route::get('/forum/{forum}/view', [ForumController::class, 'view']);
//     Route::post('/forum/{forum}/view', [ForumController::class, 'postkomentar']);
// });

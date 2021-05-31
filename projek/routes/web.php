<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MatkulController;
use App\Http\Controllers\ForumController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('layouts.master');
});

Route::get('/matkul', [MatkulController::class, 'index']);
Route::post('/matkul/create', [MatkulController::class, 'create']);
Route::get('/matkul/{kode}/edit', [MatkulController::class, 'edit']);
Route::post('/matkul/{kode}/update', [MatkulController::class, 'update']);

Route::get('/forum', [ForumController::class, 'index']);
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
// 1. ต้องมีบรรทัดนี้ ไม่งั้นขึ้น Error: Target class does not exist
use App\Http\Controllers\PokedexController; 

Route::get('/', function () {
    return view('welcome');
});

// Route ของ MyController
Route::get('mycontroller', [MyController::class, 'index']);
Route::get('/calculate', [MyController::class, 'info']);
Route::post('/request', [MyController::class, 'calculate']);

Route::get('/workshop', [MyController::class, 'index']);
Route::post('/workshop/store', [MyController::class, 'store'])->name('workshop.store');

// 2. Route ของ PokedexesController (แก้ใหม่)
route::get('/calculate',[App\Http\Controllers\MyController::class,'inFo']);
route::post('/calculate',[App\Http\Controllers\MyController::class,'calculate']);



route::resource('/pokedexs', App\Http\Controllers\PokedexController::class);
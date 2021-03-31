<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StoreDataController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';



Route::get('/logout-user', [UserController::class, 'logout'])->middleware('auth');
Route::get('/list-data', [StoreDataController::class, 'index'])->middleware('auth');
Route::get('/create-data', [StoreDataController::class, 'create'])->middleware('auth');
Route::post('/store-data', [StoreDataController::class, 'store'])->middleware('auth');






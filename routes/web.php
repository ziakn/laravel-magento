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
Route::get('/edit-data/{id}', [StoreDataController::class, 'show'])->middleware('auth');
Route::post('/update-data', [StoreDataController::class, 'update'])->middleware('auth');
Route::get('/delete-data/{id}', [StoreDataController::class, 'destroy'])->middleware('auth');






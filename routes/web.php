<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StoreDataController;
use App\Http\Controllers\RoleController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::group(['middleware' => ['auth']], function() {
Route::get('/logout-user', [UserController::class, 'logout']);
Route::get('/list-data', [StoreDataController::class, 'index']);
Route::get('/create-data', [StoreDataController::class, 'create']);
Route::post('/store-data', [StoreDataController::class, 'store']);
Route::get('/edit-data/{id}', [StoreDataController::class, 'show']);
Route::post('/update-data', [StoreDataController::class, 'update']);
Route::get('/delete-data/{id}', [StoreDataController::class, 'destroy']);


Route::get('/list-user', [UserController::class, 'index']);
Route::get('/create-user', [UserController::class, 'create']);
Route::post('/store-user', [UserController::class, 'store']);
Route::get('/edit-user/{id}', [UserController::class, 'show']);
Route::post('/update-user', [UserController::class, 'update']);
Route::get('/delete-user/{id}', [UserController::class, 'destroy']);
Route::get('/edit-password', [UserController::class, 'editPassword']);
Route::post('/change-password', [UserController::class, 'changePassword']);
  Route::resource('roles', RoleController::class);
});






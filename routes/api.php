<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/**
 * route "/register"
 * @method "POST"
 */
// Route::post('/register', App\Http\Controllers\Api\RegisterController::class)->name('register');

/**
 * route "/login"
 * @method "POST"
 */
// Route::post('/login', App\Http\Controllers\Api\LoginController::class)->name('login');
Route::post('login',[ App\Http\Controllers\Api\LoginController::class,'apilogin']);

/**
 * route "/user"
 * @method "GET"
 */
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('crud', [App\Http\Controllers\Api\CrudController::class,'index']);
Route::post('crud', [App\Http\Controllers\Api\CrudController::class,'create']);
Route::get('/crud/{id}', [App\Http\Controllers\Api\CrudController::class,'detail']);
Route::post('/crud/{id}', [App\Http\Controllers\Api\CrudController::class,'update']);
Route::delete('/crud/{id}', [App\Http\Controllers\Api\CrudController::class,'delete']);

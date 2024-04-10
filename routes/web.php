<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('pages.login');
});
Route::get('/login', function () {
    return view('pages.login');
});

Route::group(['middleware' => 'guest'], function () {
  //Route::get('/register', [AuthController::class, 'register'])->name('register');
  //Route::post('/register', [AuthController::class, 'registerPost'])->name('register');
  //Route::get('/login', [AuthController::class, 'login'])->name('login');
  Route::post('/login', [AuthController::class, 'loginPost'])->name('login');
});

Route::group(['middleware' => 'auth'], function () {

    Route::get('/dashboard', [DashboardController::class, 'index']);

    Route::resource('/product', ProductController::class);

    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

Route::get('/', function (){
    return redirect('login');
});

Route::get('register', function () {
    return view('auth.register');
})->name('view-register');

Route::get('login', function () {
    return view('auth.login');
})->name('view-login');

Route::post('register', [AuthController::class, 'register'])->name('register');
Route::post('login', [AuthController::class, 'login'])->name('login');

Route::get('dashboard', DashboardController::class)->name('dashboard');

Route::post('login', [AuthController::class, 'login'])->name('login');

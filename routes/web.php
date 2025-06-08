<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PagInicialController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('app.components.dashboard');
});

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.attempt');

Route::get('/profile', [UserController::class, 'create'])->name('user.create');
Route::post('/profile', [UserController::class, 'store'])->name('user.store');

Route::middleware(['auth'])
    ->prefix('')
    ->group(function () {
        Route::get('/pagInicial', [PagInicialController::class, 'index'])->name('Inicio');
        Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
        Route::get('/profile/edit', [UserController::class, 'edit'])->name('user.edit');
        Route::put('/profile', [UserController::class, 'update'])->name('user.update');
    });
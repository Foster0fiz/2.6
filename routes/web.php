<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create'); 
Route::post('/users', [UserController::class, 'store'])->name('users.store');
Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');
Route::patch('/users/{id}', [UserController::class, 'patch'])->name('users.patch');
Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');

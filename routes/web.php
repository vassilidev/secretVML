<?php

use App\Http\Controllers\MessageController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::resource('message', MessageController::class)->only('update');

Route::redirect('/', 'login');

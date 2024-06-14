<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LinkEmailController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/links', [LinkEmailController::class, 'index'])->name('links');

<?php

use App\Http\Controllers\Api\LinkController;
use Illuminate\Support\Facades\Route;

Route::name('api.')->group(function () {
    Route::prefix('link')->name('link.')->group(function () {
        Route::get('/get', [LinkController::class, 'getLink'])->name('get');
        Route::get('/generate', [LinkController::class, 'linkGenerate'])->name('generate');
    });
});

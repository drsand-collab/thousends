<?php

use App\Http\Controllers\Api\LinkController;
use App\Http\Controllers\Api\ThousandOperationDataController;
use Illuminate\Support\Facades\Route;

Route::name('api.')->group(function () {
    Route::prefix('link')->name('link.')->group(function () {
        Route::get('/get', [LinkController::class, 'getLink'])->name('get');
        Route::get('/generate', [LinkController::class, 'linkGenerate'])->name('generate');
    });

    Route::prefix('thousand_operation')->name('thousand_operation.')->group(function () {
        Route::get('/', [ThousandOperationDataController::class, 'index'])->name('index');
    });
});

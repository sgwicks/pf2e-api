<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeatController;

Route::prefix('feats')
    ->name('feats.')
    ->group(function (){
        Route::get('/', [FeatController::class, 'index'])->name('index');
        Route::get('/{feat}', [FeatController::class, 'show'])->name('show');
        Route::post('/', [FeatController::class, 'store'])->name('store');
        Route::patch('/{feat}', [FeatController::class, 'update'])->name('update');
        Route::delete('/{feat}', [FeatController::class, 'destroy'])->name('destroy');
    });

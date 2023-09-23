<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HeritageController;

Route::prefix('heritages')
    ->name('heritages.')
    ->group(function (){
        Route::get('/', [HeritageController::class, 'index'])->name('index');
        Route::get('/{heritage}', [HeritageController::class, 'show'])->name('show');
        Route::post('/', [HeritageController::class, 'store'])->name('store');
        Route::patch('/{heritage}', [HeritageController::class, 'update'])->name('update');
        Route::delete('/{heritage}', [HeritageController::class, 'destroy'])->name('destroy');
    });

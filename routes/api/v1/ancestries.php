<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AncestryController;

Route::prefix('ancestries')
    ->name('ancestries.')
    ->group(function (){
        Route::get('/', [AncestryController::class, 'index'])->name('index');
        Route::get('/{ancestry}', [AncestryController::class, 'show'])->name('show');
        Route::post('/', [AncestryController::class, 'store'])->name('store');
        Route::patch('/{ancestry}', [AncestryController::class, 'update'])->name('update');
        Route::delete('/{ancestry}', [AncestryController::class, 'destroy'])->name('destroy');

//        Route::post('/bulk-upload');
    });

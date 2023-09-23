<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CharacterClassController;

Route::prefix('character_classes')
    ->name('character_classes.')
    ->group(function (){
        Route::get('/', [CharacterClassController::class, 'index'])->name('index');
        Route::get('/{character_class}', [CharacterClassController::class, 'show'])->name('show');
        Route::post('/', [CharacterClassController::class, 'store'])->name('store');
        Route::patch('/{character_class}', [CharacterClassController::class, 'update'])->name('update');
        Route::delete('/{character_class}', [CharacterClassController::class, 'destroy'])->name('destroy');
    });

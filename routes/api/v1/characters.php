<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CharacterController;
use App\Http\Controllers\CharacterSkillController;

Route::prefix('characters')
    ->name('characters.')
    ->group(function (){
        Route::get('/', [CharacterController::class, 'index'])->name('index');
        Route::get('/{character}', [CharacterController::class, 'show'])->name('show');
        Route::post('/', [CharacterController::class, 'store'])->name('store');
        Route::patch('/{character}', [CharacterController::class, 'update'])->name('update');
        Route::delete('/{character}', [CharacterController::class, 'destroy'])->name('destroy');

        Route::prefix('/{character}')
            ->group(function () {
                Route::prefix('/skills')
                    ->name('skills.')
                    ->group(function () {
                        Route::get('/', [CharacterSkillController::class, 'index'])->name('index');
                        Route::get('/{character_skill}', [CharacterSkillController::class, 'show'])->name('show');
                        Route::patch('/{character_skill}', [CharacterSkillController::class, 'update'])->name('update');
                    });
            });
    });

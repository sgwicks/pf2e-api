<?php

use App\Http\Controllers\CharacterActionController;
use App\Http\Controllers\CharacterFeatController;
use App\Http\Controllers\CharacterCharacterClassController;
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

                Route::prefix('/feats')
                    ->name('feats.')
                    ->group(function () {
                        Route::get('/', [CharacterFeatController::class, 'index'])->name('index');
                        Route::post('/', [CharacterFeatController::class, 'store'])->name('store');
                        Route::get('/{character_feat}', [CharacterFeatController::class, 'show'])->name('show');
                        Route::delete('/{character_feat}', [CharacterFeatController::class, 'destroy'])->name('destroy');
                    });

                Route::prefix('/actions')
                    ->name('actions.')
                    ->group(function () {
                        Route::get('/', [CharacterActionController::class, 'index'])->name('index');
                        Route::post('/', [CharacterActionController::class, 'store'])->name('store');
                        Route::get('/{character_action}', [CharacterActionController::class, 'show'])->name('show');
                        Route::patch('/{character_action', [CharacterActionController::class, 'update'])->name('update');
                        Route::delete('/{character_action}', [CharacterActionController::class, 'destroy'])->name('destroy');
                    });

                Route::prefix('/character_classes')
                    ->name('character_classes.')
                    ->group(function () {
                        Route::get('/', [CharacterCharacterClassController::class, 'index'])->name('index');
                        Route::post('/', [CharacterCharacterClassController::class, 'store'])->name('store');
                        Route::get('/{character_class}', [CharacterCharacterClassController::class, 'show'])->name('show');
                        Route::patch('/{character_class}', [CharacterCharacterClassController::class, 'update'])->name('update');
                        Route::delete('/{character_class}', [CharacterCharacterClassController::class, 'destroy'])->name('destroy');
                    });
            });
    });

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;

Route::group([
    'prefix' => 'auth'
], function () {
    Route::post('login', [AuthController::class, 'login']);
    Route::post('logout', [AuthController::class, 'logout']);
    Route::post('refresh', [AuthController::class, 'refresh']);

    Route::group([
        'prefix' => 'permissions'
    ], function () {
       Route::get('/', [PermissionController::class, 'index']);
       Route::post('/', [PermissionController::class, 'store']);
       Route::get('/{permission}', [PermissionController::class, 'show']);
//       Route::patch('/{permission}', [PermissionController::class, 'update']);
       Route::delete('/{permission}', [PermissionController::class, 'destroy']);
    });

    Route::group([
        'prefix' => 'roles'
    ], function () {
        Route::get('/', [RoleController::class, 'index']);
        Route::post('/', [RoleController::class, 'store']);
        Route::get('/{role}', [RoleController::class, 'show']);
//        Route::patch('/{role}', [RoleController::class, 'update']);
        Route::delete('/{role}', [RoleController::class, 'destroy']);
    });
});

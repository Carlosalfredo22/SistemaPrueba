<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RolesController;

Route::middleware('auth:sanctum')->group(function () {
    Route::prefix('roles')->group(function () {
        Route::get('/', [RolesController::class, 'index']); // Obtener todos los roles
        Route::post('/', [RolesController::class, 'store']); // Crear un nuevo rol
        Route::get('/{id}', [RolesController::class, 'show']); // Mostrar un rol específico
        Route::put('/{id}', [RolesController::class, 'update']); // Actualizar un rol
        Route::delete('/{id}', [RolesController::class, 'destroy']); // Eliminar un rol
    });
});
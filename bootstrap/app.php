<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',  // Agregado para cargar las rutas de la API
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        // Puedes agregar middleware personalizado aquí
    })
    ->withExceptions(function (Exceptions $exceptions) {
        // Puedes personalizar el manejo de excepciones aquí
    })
    ->create();

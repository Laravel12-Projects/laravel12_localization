<?php

use App\Http\Middleware\Language;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Session\Middleware\StartSession;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) { 
        // Establece el middleware Language en el grupo de middleware web
        // De esta forma, el middleware Language se ejecutar  en todas las peticiones web
        $middleware->web([ Language::class,]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();

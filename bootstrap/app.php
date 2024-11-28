<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\Cors; // Import your Cors middleware



return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )

    ->withMiddleware(function (Middleware $middleware) {
        /*  $middleware->trustProxies(at: '*');
        $middleware->validateCsrfTokens(['/newtasks']); */

        $middleware->validateCsrfTokens(except: [
            '/updatetasks/*',
            '/deletetasks/*',
            '/newtasks',
            '/increment/*',
            '/whereId/*',
        ]);
        $middleware->append(Cors::class);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();

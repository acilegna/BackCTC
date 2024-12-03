<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\Cors; // Import your Cors middleware
use App\Http\Middleware\JwtMiddleware;



return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        //agregado api
        api: __DIR__ . '/../routes/api.php',
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
            '/api/auth/register/*',
            '/api/auth/me/*',
        ]);
        $middleware->append(Cors::class);
    })


    ->withExceptions(function (Exceptions $exceptions) {
        $exceptions->render(function (AuthenticationException $e, Request $request) {
            if ($request->is('api/*')) {
                return response()->json([
                    'message' => $e->getMessage(),
                ], 401);
            }
        });
    })->create();
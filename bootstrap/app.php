<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'company.auth' => \App\Http\Middleware\RedirectIfNotAuthenticatedCompany::class,
            'customer.auth' => \App\Http\Middleware\RedirectIfNotAuthenticatedCustomer::class,
            'delivery.auth' => \App\Http\Middleware\RedirectIfNotAuthenticatedDelivery::class,
            'role.customer' => \App\Http\Middleware\RoleMiddlewareCustomer::class,
            'role.company' => \App\Http\Middleware\RoleMiddlewareCompany::class,
            'role.delivery' => \App\Http\Middleware\RoleMiddlewareDelivery::class
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();

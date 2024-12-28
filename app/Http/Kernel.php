<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    // Other middleware

    protected $routeMiddleware = [
        // Other middlewares
        'admin' => \App\Http\Middleware\AdminMiddleware::class,  // Add this line
    ];

    // Other methods and middleware definitions
}

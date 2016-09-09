<?php

namespace App\Http\Middleware;

use Closure;
<<<<<<< HEAD
use Illuminate\Contracts\Routing\Middleware;
use Illuminate\Http\Response;

class Cors implements Middleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        return $next($request)
            ->header('Access-Control-Allow-Origin','*')
            ->header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS')
            ->header('Access-Control-Allow-Headers', 'Content-Type, Accept, Authorization, X-Requested-With')
            ->header('Content-Type: application/json;charset=UTF-8')
            ->header('Access-Control-Allow-Credentials', 'true')
            ->header('Access-Control-Max-Age', '28800');
    }
}
=======

class Cors {
    public function handle($request, Closure $next)
    {
        return $next($request)
            ->header('Access-Control-Allow-Origin', '*')
            ->header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');
    }
}
>>>>>>> 91c16cd032f5cff1a02fe64dc708e466077ddc63

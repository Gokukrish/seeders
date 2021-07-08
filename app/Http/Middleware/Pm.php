<?php

namespace App\Http\Middleware;

use Closure;

class Pm
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
        if(auth()->user()->role == 4){
            return $next($request);
        }
        return route('login');
    }
}

<?php

namespace App\Http\Middleware;

use Closure;

class PR
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
        if(auth()->user()->role == 1){
            return redirect('pesticides');
        }
        else{

            return route('login');
        }
    }
}

<?php

namespace App\Http\Middleware;

use Closure;

class CheckRoleMiddleware
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
        
        //User role is admin
        if ( Auth::check() && Auth::user()->role==1 )
        {
            return $next($request);
        }

        //If user role is student
        if(Auth::check() && auth()->user()->role == 2)
        {
             return view('studentDashboard');
             //or route('routeName');
        }

        //If user role is teacher
        if(Auth::check() && auth()->user()->role ==3)
        {

             return view('teacherDashboard');
             //or route('routeName');

        }
        //default redirect
        return redirect('home');

        

    }

}

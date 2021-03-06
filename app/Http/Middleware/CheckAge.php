<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckAge
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
       // echo 'This is my Global Middleware';
        if($request->age && $request->age<18)
        {
            return redirect('noaccesspage');
        }
        return $next($request);
    }
}

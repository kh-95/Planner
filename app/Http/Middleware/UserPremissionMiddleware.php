<?php

namespace App\Http\Middleware;

use Closure;

class UserPremissionMiddleware
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
        if(!auth()->check() || auth()->user()->role !="user"  ){

         return view('user');
            
            }
            return $next($request);
            }
}

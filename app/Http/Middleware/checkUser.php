<?php

namespace App\Http\Middleware;

use Closure;
//use Illuminate\Support\Facades\Auth;

class checkUser
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
        if(auth()->guest()){
            return redirect('/login');
        }
        if(auth()->user()->group === 'user'){
            return redirect('/');
        }
        return $next($request);
    }
}

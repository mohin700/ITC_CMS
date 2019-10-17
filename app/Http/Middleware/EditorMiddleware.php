<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class EditorMiddleware
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
        if (Auth::check() && Auth::user()->role->level === 2 ) {
           return $next($request); 

        }elseif(Auth::check() && Auth::user()->role->level === 1){
            return redirect()->route('admin.dashboard');

        }elseif(Auth::check() && Auth::user()->role->level === 3){
            return redirect()->route('viewer.dashboard');

        }else{
            return redirect()->route('login'); 
        }
    }
}

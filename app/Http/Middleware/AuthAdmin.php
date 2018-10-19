<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;

class AuthAdmin
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
         if(Auth::check() && Auth::user()->auth()==1){//Auth class ı login olup olmadıgını kontrol eder
            return $next($request);
        }else{
            return redirect('/');
        }

        return $next($request);
    }
}

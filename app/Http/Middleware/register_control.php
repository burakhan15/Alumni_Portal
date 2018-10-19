<?php

namespace App\Http\Middleware;

use Closure;

class register_control
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
       if (isset($request->school_id) || isset($request->identify_id)) {
         return $next($request);
        }
        else{
            return back()->withInput();
        }
    }
}

<?php

namespace App\Http\Middleware;

use Closure;

class ownersMiddleware
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

        if(Auth::user()->user_type == 'machinery owner'){
 
            return $next($request);
        } else{
return redirect('hires');
        }
        
    }
}

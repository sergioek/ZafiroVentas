<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;


class UserStatus
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
        if(auth()->user()->status=='ACTIVE'){
            return $next($request); 
        }else{
            
            return redirect()->route('login.index')->with('alert','No fue habilitado por el administrador para ingresar al sistema.');
        }
       
    }
}

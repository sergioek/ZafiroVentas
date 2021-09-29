<?php

namespace App\Http\Middleware;

use App\Models\Box;
use Closure;
use Illuminate\Http\Request;

class BoxMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {   $box=Box::all()->last();
        if($box->status=='CLOSE'){
            return redirect()->route('boxes.create')->with('succes','Debe abrir una caja para iniciar las ventas.');
        }else{
           return $next($request); 
        }
        
    }
}

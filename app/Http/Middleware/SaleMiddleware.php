<?php

namespace App\Http\Middleware;

use App\Models\CartProduct;
use Closure;
use Illuminate\Http\Request;

class SaleMiddleware
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
      
       $subtotal=CartProduct::all()->where('user_id',auth()->user()->id);
        $total=$subtotal->sum('subtotal');
        if($total==0){
           return redirect()->route('carts.index')->with('alert','No agrego productos al carrito, porque esta en $0.00. Para continuar la compra agregue productos.');
        }else{
            return $next($request);
        }

       
    }
}

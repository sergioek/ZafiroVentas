<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaleValidate;
use App\Models\Sale;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    public function edit($total){
        if($total==0){
            return redirect()->route('carts.index')->with('alert','No agrego productos al carrito, porque esta en $0.00. Para continuar la compra agregue productos.');
        }else{
            return view('sales.sale');
        }
        
    }

    public function store(SaleValidate $request){
    
        $sale=Sale::create([
            'items'=>$request->items,
            'cash'=>$request->cash,
            'debt'=>$request->debt,
            'status'=>$request->status,
            'notes'=>$request->notes,
            'user_id'=>auth()->user()->id,
            'cuestomer_id'=>$request->cuestomer_id,
        ]);

    }
}

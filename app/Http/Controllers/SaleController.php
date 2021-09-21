<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaleValidate;
use App\Models\CartProduct;
use App\Models\Product;
use App\Models\Sale;
use App\Models\SaleDetails;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    public function cart(){
        $subtotal=CartProduct::all()->where('user_id',auth()->user()->id);
        $total=$subtotal->sum('subtotal');
        if($total==0){
           return redirect()->route('carts.index')->with('alert','No agrego productos al carrito, porque esta en $0.00. Para continuar la compra agregue productos.');
        }else{
            return view('sales.sale');
        }
        
    }

    public function index(){
        return view('sales.sale-show');
    }

    public function show(){

    }

    public function edit(){

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

        $products=CartProduct::all()->where('user_id',auth()->user()->id);
        foreach($products as $product){
            $sale_details=SaleDetails::create([
                'price'=>$product->product->price,
                'quantity'=>$product->amount,
                'sale_id'=>$sale->id,
                'product_id'=>$product->product->id, ]); 
            
            $product->product->update([
                'stock'=>$product->product->stock-$product->amount,
            ]); 

            $product->delete();
                
        }




        

    }

}

    


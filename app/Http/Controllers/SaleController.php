<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaleValidate;
use App\Models\CartProduct;
use App\Models\Product;
use App\Models\Sale;
use App\Models\SaleDetails;
use Carbon\Carbon;
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

    public function cancel(Sale $sale)
    {
        $sale->update([
            'status'=>'CANCELLED',
        ]);

        $details=SaleDetails::all()->where('sale_id',$sale->id);
        foreach ($details as $detail) {
            $product=Product::find($detail->product_id);
            $product->update([
                'stock'=>$product->stock+$detail->quantity,
            ]);
        }

        return redirect()->route('sales.index')->with('success','Se cancelo una venta y se recompuso su stock');

    }



    public function index(){
        return view('sales.sale-show');
        
    }


    public  function cuestomer()
    {
        return view('sales.sale-cuestomer');

    }


    public function edit($id){
        $sale=Sale::find($id);
        return view('sales.sale-edit',compact('sale'));

    }

    public function update(Request $request, Sale $sale){
        $request->validate([
            'cash'=>'required|numeric|',
        ]);

        if($sale->debt-$request->cash==0){
            $status='PAID';
        }else{
            $status='PENDING';
        }
        $sale->update([
            'cash'=>$sale->cash+$request->cash,
            'debt'=>$sale->debt-$request->cash,
            'status'=>$status,
        ]);

        return redirect()->route('sales.index')->with('success','Se actualizo una venta.');

    }


    public function store(SaleValidate $request){
        $date=Carbon::now()->toDateString();
        $sale=Sale::create([
            'items'=>$request->items,
            'date'=>$date,
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
        
        return redirect()->route('detailsale.show',$sale->id)->with('success','Se realizo una nueva venta');

        

    }

}

    


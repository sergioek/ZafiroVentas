<?php

namespace App\Http\Livewire\Cart;

use App\Models\Cart as ModelsCart;
use App\Models\CartProduct;
use App\Models\Product;
use App\Models\User;
use App\View\Components\porcentage;
use Livewire\Component;


class Cart extends Component
{

 
    public $amount;
    public $discount;
    public $interest;

    public function DeleteAmount(CartProduct $cart){
        $cart->delete();
        session()->flash('success','Producto eliminado del carrito');
    }

    public function UpdateAmount(CartProduct $cart){
        $validatedData = $this->validate([
            'amount' => 'required|numeric|',
        ]);

        $cart->update([
            'amount'=>$this->amount,
            'subtotal'=>$this->amount*$cart->product->price,
        ]);

    }

    public function Percentage(){
    
        $cart=CartProduct::where('user_id',auth()->user()->id)->sum('subtotal');
     
       $count=CartProduct::where('user_id',auth()->user()->id)->count();
        if(empty($this->interest)){
           $int=0;
        }else{
             $int=$this->interest/$count;
        } 
        if(empty($this->discount)){
            $des=0;
         }else{
             $des=$this->discount/$count;
         } 

        $value_decrement=$cart*$des/100;
        $value_increment=$cart*$int/100;
       
    
        $carts=CartProduct::where('user_id',auth()->user()->id)->increment('subtotal',$value_increment);
  
       $carts=CartProduct::where('user_id',auth()->user()->id)->decrement('subtotal',$value_decrement);
      
        $cartsall=CartProduct::where('user_id',auth()->user()->id);
        $cartsall->update([
            'discount'=>$des,
            'intereset'=>$int,
        ]);

    
        
    }

    public function Cancel(){
        $user=auth()->user()->id;
        $cart=CartProduct::where('user_id',$user)->delete();
        return view('carts.cart');

    }

    

    public function render()
    {
        $carts=CartProduct::all()->where('user_id',auth()->user()->id);
        $total=$carts->sum('subtotal');

        return view('livewire.cart.cart',compact('carts','total'));
    
}

}
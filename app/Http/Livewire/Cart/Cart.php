<?php

namespace App\Http\Livewire\Cart;

use App\Models\Cart as ModelsCart;
use App\Models\CartProduct;
use App\Models\Product;
use App\Models\User;
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

    public function Percentage($cart){
        $validatedData = $this->validate([
            'discount' => 'required|numeric|',
            'interest' => 'required|numeric|',
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
        $total=CartProduct::all()->where('user_id',auth()->user()->id)->sum('subtotal');
        return view('livewire.cart.cart',compact('carts','total'));
        
    }
}

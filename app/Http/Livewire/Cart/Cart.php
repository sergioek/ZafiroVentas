<?php

namespace App\Http\Livewire\Cart;

use App\Models\Cart as ModelsCart;
use App\Models\CartProduct;
use App\Models\Product;
use App\Models\User;
use Livewire\Component;


class Cart extends Component
{
    public function DeleteAmount(CartProduct $cart){
        $cart->delete();
        session()->flash('success','Producto eliminado del carrito');
    }


    public function render()
    {
        
        $carts=CartProduct::all()->where('user_id',auth()->user()->id);
        return view('livewire.cart.cart',compact('carts'));
    }
}

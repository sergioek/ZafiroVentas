<?php

namespace App\Http\Livewire\Sale;

use App\Models\CartProduct;
use Livewire\Component;

class Sale extends Component
{
    public function render()

    {
        $carts=CartProduct::all()->where('user_id',auth()->user()->id);
        $total=$carts->sum('subtotal');
        return view('livewire.sale.sale',compact('total'));
    }
}

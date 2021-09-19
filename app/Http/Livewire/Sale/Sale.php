<?php

namespace App\Http\Livewire\Sale;

use App\Models\CartProduct;
use App\Models\Cuestomer;
use Livewire\Component;

class Sale extends Component
{
    public $search;
    public $total;
    public $items;
    public $paid;
    public $change;

    public function mount(){
        $carts=CartProduct::all()->where('user_id',auth()->user()->id);
        $this->total=$carts->sum('subtotal');

        $items=CartProduct::all()->where('user_id',auth()->user()->id);
        $this->items=$items->sum('amount');
    }

 

    public function render()

    {
        $total=1;
        $total=$this->total;
        $items=$this->items;
        $cuestomers=Cuestomer::all()->where('dni',$this->search);

        $paid=$this->paid;
        return view('livewire.sale.sale',compact('cuestomers','total','paid','items'));
    }

 
}

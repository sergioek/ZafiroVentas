<?php

namespace App\Http\Livewire\Sale;

use App\Models\CartProduct;
use App\Models\Cuestomer;
use Livewire\Component;

class Sale extends Component
{
    public $search;
    public $total;
    public $paid;
    public $change;

    public function mount(){
        $carts=CartProduct::all()->where('user_id',auth()->user()->id);
        $this->total=$carts->sum('subtotal');
    }


    public function render()

    {
        $total=1;
        $total=$this->total;
        $cuestomers=Cuestomer::all()->where('dni',$this->search);

     
        return view('livewire.sale.sale',compact('cuestomers','total'));
    }
}

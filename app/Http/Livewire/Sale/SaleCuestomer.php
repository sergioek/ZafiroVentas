<?php

namespace App\Http\Livewire\Sale;

use App\Models\Cuestomer;
use App\Models\Sale;
use Livewire\Component;
use Livewire\WithPagination;

class SaleCuestomer extends Component
{
    public $status;
    public $cuestomers;
    
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function mount(){
        $this->status="ALL";
        $this->cuestomers=Cuestomer::all();


    }

    
   
    public function render()
    {
      
            if($this->status=="ALL"){
                $sales=Sale::where('date','>',0)->orderby('updated_at','DESC')->Paginate(10);
            }else{

                 $sales=Sale::where('cuestomer_id',$this->status)->orderby('updated_at','DESC')->Paginate(10);
            }



        return view('livewire.sale.sale-cuestomer',compact('sales',$this->cuestomers));
    }
}

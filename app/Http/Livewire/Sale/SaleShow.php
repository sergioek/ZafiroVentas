<?php

namespace App\Http\Livewire\Sale;

use App\Models\Cuestomer;
use App\Models\Sale;
use Livewire\Component;
use Livewire\WithPagination;


class SaleShow extends Component
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
                $sales=Sale::where('date','>',0)->orderby('date','DESC')->Paginate(10);
            }

            
            if($this->status=="PAID"){
                $sales=Sale::where('status',$this->status)->orderby('date','DESC')->Paginate(10);

            }

            
            if($this->status=="PENDING"){
                $sales=Sale::where('status',$this->status)->orderby('date','DESC')->Paginate(10);

            }

            if($this->status=="CANCELLED"){
                $sales=Sale::where('status',$this->status)->orderby('date','DESC')->Paginate(10);

            }


            if(is_numeric($this->status)){
                $sales=Sale::where('cuestomer_id',$this->status)->orderby('date','DESC')->Paginate(10);

            }


        return view('livewire.sale.sale-show',compact('sales',$this->cuestomers));
    }
}

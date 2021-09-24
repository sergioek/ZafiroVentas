<?php

namespace App\Http\Livewire\Sale;

use App\Models\Cuestomer;
use App\Models\Sale;
use Livewire\Component;
use Livewire\WithPagination;


class SaleShow extends Component
{
    public $search;
    public $status;
    
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function mount(){
        $this->status="ALL";

    }
    

   
    public function render()
    {
        
        if($this->status=="ALL"){
            $sales=Sale::where('date','like','%'.$this->search.'%')->orderby('date','DESC')->Paginate(10);
        }else{
            $sales=Sale::where('date','like','%'.$this->search.'%')->where('status',$this->status)->orderby('date','DESC')->Paginate(10);
        }
       
        return view('livewire.sale.sale-show',compact('sales'));
    }
}

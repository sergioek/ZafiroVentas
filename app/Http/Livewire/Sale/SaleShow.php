<?php

namespace App\Http\Livewire\Sale;

use App\Models\Sale;
use Livewire\Component;
use Livewire\WithPagination;


class SaleShow extends Component
{
    public $search;

    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function mount(){
        $sales=Sale::all();
        return view('livewire.sale.sale-show',compact('sales'));

    }

    public function render()
    {
        $sales=Sale::where('updated_atclas','like','%'.$this->search.'%')->orderby('updated_at','DESC')->Paginate(3);

        //$products=Product::where('name','like','%'.$this->search.'%');
        
        return view('livewire.sale.sale-show',compact('sales'));
    }
}

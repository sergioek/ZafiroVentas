<?php

namespace App\Http\Livewire\Cuestomer;

use App\Models\Cuestomer as ModelsCuestomer;
use App\Models\Denominations;
use Livewire\Component;
use Livewire\WithPagination;

class Cuestomer extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $search;

    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function render()
    {
        $cuestomers=ModelsCuestomer::where('name','like','%'.$this->search.'%')->orderby('name','ASC')->Paginate(10);
        return view('livewire.cuestomer.cuestomer',compact('cuestomers'));
        
    }
}

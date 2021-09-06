<?php

namespace App\Http\Livewire\Denomination;

use App\Models\Denominations;
use Livewire\Component;
use Livewire\WithPagination;

class ShowDenomination extends Component
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
        $denominations=Denominations::where('type','like','%'.$this->search.'%')->orderby('value','ASC')->Paginate(5);
        return view('livewire.denomination.show-denomination',compact('denominations'));
    }
}

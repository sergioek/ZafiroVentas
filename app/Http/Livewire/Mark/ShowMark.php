<?php

namespace App\Http\Livewire\Mark;

use App\Models\Mark;
use Livewire\Component;
use Livewire\WithPagination;

class ShowMark extends Component
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
        $marks=Mark::where('name','like','%'.$this->search.'%')->orderby('name','ASC')->Paginate(10);
        return view('livewire.mark.show-mark',compact('marks'));
    }
}

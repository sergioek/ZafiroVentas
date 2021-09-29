<?php

namespace App\Http\Livewire\Boxes;

use App\Models\Box;
use Livewire\Component;
use Livewire\WithPagination;

class BoxShow extends Component
{
    public $search;

    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function render()
    {
        $boxes=Box::where('date','like','%'.$this->search.'%')->orderby('date','DESC')->Paginate(6);
        return view('livewire.boxes.box-show',compact('boxes'));
    }
}

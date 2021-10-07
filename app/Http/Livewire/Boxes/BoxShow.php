<?php

namespace App\Http\Livewire\Boxes;

use App\Models\Box;
use Carbon\Carbon;
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

    public function mount(){
        $date=Carbon::now()->format('Y-m-d');
        $this->search=$date;
    }
    public function render()
    {   
        $boxes=Box::where('date','like','%'.$this->search.'%')->orderby('date','DESC')->Paginate(6);
        return view('livewire.boxes.box-show',compact('boxes'));
    }
}

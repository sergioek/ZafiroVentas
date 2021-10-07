<?php

namespace App\Http\Livewire\category;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;
use phpDocumentor\Reflection\Types\This;


class ShowCategory extends Component
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
        //Category
       $categories=Category::where('name','like','%'.$this->search.'%')->orderby('name','ASC')->Paginate(10);
       
        return view('livewire.category.show-category',compact('categories'));

    }
}

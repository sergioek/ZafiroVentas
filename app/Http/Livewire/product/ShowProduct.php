<?php

namespace App\Http\Livewire\product;

use App\Models\Category;
use App\Models\Product;
use App\Models\Waist;
use Hamcrest\Type\IsNumeric;
use Livewire\Component;
use Livewire\WithPagination;


class ShowProduct extends Component
{
    public $search;
    public $idCategory;
    public $filter;
    public $category;
    public $waist;
    use WithPagination;
    protected $paginationTheme = 'bootstrap';


    public function mount($idCategory){

        $this->category=Category::all();
        $this->filter=$idCategory;


    }

    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function render()
    {
        if($this->filter=="all"){

            $products=Product::where('name','like','%'.$this->search.'%')->orderby('name','ASC')->Paginate(3);
        
        }else{
            $products=Product::where('category_id',$this->filter)->Paginate(3);
        }

        return view('livewire.product.show-product',compact('products',$this->category));
        
    }

  
   

    
}

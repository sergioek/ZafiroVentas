<?php

namespace App\Http\Livewire\product;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use App\Models\Waist;
use Hamcrest\Type\IsNumeric;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Http\Request;

class ShowProduct extends Component
{
    public $search;
    public $idCategory;
    public $filter;
    public $category;
    public $waist;
    public $amount;
   
    use WithPagination;
    protected $paginationTheme = 'bootstrap';


    public function mount($idCategory){

        $this->category=Category::all();
        $this->filter=$idCategory;


    }

    public function addCart($id){
        if (empty($this->amount)) {
            session()->flash('alert', 'Debe indicar la cantidad para agregar productos en el carrito');
        }else{
        $user=auth()->user()->id;
        $cart=Cart::create([
            'amount'=>$this->amount,
            'products_id'=>$id,
            'users_id'=>$user,
        ]);
        session()->flash('success_cart', 'Producto/s agregados al carrito.Presione aqui para ver su carrito.');
        }
        

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

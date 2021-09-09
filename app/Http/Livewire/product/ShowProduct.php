<?php

namespace App\Http\Livewire\product;

use App\Models\CartProduct;
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
    public $amount;
   
    use WithPagination;
    protected $paginationTheme = 'bootstrap';


    public function mount($idCategory){

        $this->category=Category::all();
        $this->filter=$idCategory;


    }

    public function addCart($id){
        $validatedData = $this->validate([
            'amount' => 'required|numeric|',
        ]);
        //Aunque ya tiene validacion, lo hacemos igual
        if (empty($this->amount)) {
            session()->flash('alert', 'Debe indicar la cantidad de cada producto para poder agregarlos en el carrito');
        }else{
            $user=auth()->user()->id;
            $flight = CartProduct::where('product_id', $id)->where('user_id',$user)->first();
                if (empty($flight)) {
                    $cart=CartProduct::create([
                        'amount'=>$this->amount,
                        'product_id'=>$id,
                        'user_id'=>$user,
                    ]);
                }else{
                    $flight->update([
                        'amount'=>$flight->amount+$this->amount,
                    ]);
                }
              

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

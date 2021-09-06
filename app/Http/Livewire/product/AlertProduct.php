<?php

namespace App\Http\Livewire\product;

use App\Http\Requests\ProductValidate;
use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Livewire\Request;
use Livewire\WithPagination;

class AlertProduct extends Component
{
    public $search;
    public $filter="exhausted";
    public $alert;
    public $amount;
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    
    public function update($id){
        $product=Product::find($id);

        $product->update([
            'stock'=>$product->stock+$this->amount,
        ]);
        $products=Product::where('name','like','%'.$this->search.'%')->where('stock',0)->orderby('name','ASC')->Paginate(5);
        session()->flash('msg', 'Post successfully updated.');
        return redirect()->to('/alert/products');
    }
    public function render()
    {
        if ($this->filter=="exhausted") {
            $products=Product::where('name','like','%'.$this->search.'%')->where('stock',0)->orderby('name','ASC')->Paginate(5);
        }else{
            $products=Product::where('name','like','%'.$this->search.'%')->where('stock',$this->alert)->Paginate(5);
        }
        
      
       return view('livewire.product.alert-product',compact('products'));

        
    }
}

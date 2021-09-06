<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductValidate;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Waist;
use Livewire\Livewire;

class ProductController extends Controller
{
    public function index(){
        $id="all";
        return view('products.show-product',compact('id'));
    }

    public function show($id){
        return view('products.show-product',compact('id'));
    }

    public function alert(){
        
        return view('products.alert-product');

    }

    public function create(){
        $category=Category::all();
        $waists=Waist::all();
        return view('products.new-product',compact('category','waists'));

    }

    public function store(ProductValidate $request){
        $image= $_FILES['image'];
        $name_image= $_FILES['image']['name'];
        $type_image= $_FILES['image']['type'];

        if (empty($name_image)) {
            $image="https://dummyimage.com/70x70/000000/fff&text=".$request->name
            ;
        }else{
            if ($type_image=="image/jpeg" or $type_image=="image/png" ) {

                $folder_final=$_SERVER['DOCUMENT_ROOT'].'/storage/products/';
                move_uploaded_file($_FILES['image']['tmp_name'],$folder_final.$name_image);
                $image="http://localhost/ventas/public/storage/products/".$name_image;

            }else{
                return redirect()->route('products.create')->with('error_file','En tipo de archivo o formato.');
               
            }
        }     

        $product=Product::create([
            'name'=>$request->name,
            'category_id'=>$request->category_id,
            'brcode'=>$request->brcode,
            'cost'=>$request->cost,
            'price'=>$request->price,
            'stock'=>$request->stock,
            'alerts'=>$request->alerts,
            'image'=>$image,
            'waist_id'=>$request->waist_id,
            'color'=>$request->color,
            ]);
        return redirect()->route('products.create')->with('msg','Se ingreso un nuevo producto.');
           

    }

   
    public function edit($product){
        $category=Category::all();
        $waists=Waist::all();
        $product=Product::find($product);
        return view('products.edit-product',compact('category','product','waists'));
    }

    public function update(ProductValidate $request, Product $product){
        $image= $_FILES['image'];
        $name_image= $_FILES['image']['name'];
        $type_image= $_FILES['image']['type'];

        if (empty($name_image)) {
            $image="https://dummyimage.com/70x70/000000/fff&text=".$request->name
            ;
        }else{
            if ($type_image=="image/jpeg" or $type_image=="image/png" ) {

                $folder_final=$_SERVER['DOCUMENT_ROOT'].'/storage/products/';
                move_uploaded_file($_FILES['image']['tmp_name'],$folder_final.$name_image);
                $image="http://localhost/ventas/public/storage/products/".$name_image;

            }else{
                return redirect()->route('products.edit')->with('error_file','En tipo de archivo o formato.');
               
            }
        }    

        $product->update([
            'name'=>$request->name,
            'category_id'=>$request->category_id,
            'brcode'=>$request->brcode,
            'cost'=>$request->cost,
            'price'=>$request->price,
            'stock'=>$request->stock,
            'alerts'=>$request->alerts,
            'image'=>$image,
            'waist_id'=>$request->waist_id,
            'color'=>$request->color,
            ]);
        return redirect()->route('products.index')->with('msg','Se edito un producto.');
        
        

    }

    public function destroy(Product $product){
        $product->delete();
        $id="all";
        return view('products.show-product',compact('id'));
    }
}

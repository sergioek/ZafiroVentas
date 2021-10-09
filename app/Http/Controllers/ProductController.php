<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductValidate;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Mark;
use App\Models\Waist;
use Exception;
use Livewire\Livewire;

class ProductController extends Controller
{

    public function __construct()
    {
        $this->middleware('can:products.index')->only('index'); 
        $this->middleware('can:products.show')->only('show'); 
        $this->middleware('can:products.create')->only('create'); 
        $this->middleware('can:products.store')->only('store');
        $this->middleware('can:products.edit')->only('edit'); 
        $this->middleware('can:products.update')->only('update');
        $this->middleware('can:products.destroy')->only('destroy'); 
        $this->middleware('can:products.alert')->only('alert'); 

    }
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
        $marks=Mark::all();
        $waists=Waist::all();
        return view('products.new-product',compact('category','waists','marks'));

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

                $folder_final=$_SERVER['DOCUMENT_ROOT'].'/minegocio/public/storage/products/';
                move_uploaded_file($_FILES['image']['tmp_name'],$folder_final.$name_image);
                $image="http://localhost/minegocio/public/storage/products/".$name_image;

            }else{
                return redirect()->route('products.create')->with('alert','En tipo de archivo o formato.');
               
            }
        }     

        $product=Product::create([
            'name'=>$request->name,
            'mark_id'=>$request->mark_id,
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
        return redirect()->route('products.create')->with('success','Se ingreso un nuevo producto.');
           

    }

   
    public function edit($product){
        $category=Category::all();
        $marks=Mark::all();
        $waists=Waist::all();
        $product=Product::find($product);
        return view('products.edit-product',compact('category','product','waists','marks'));
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

                $folder_final=$_SERVER['DOCUMENT_ROOT'].'/minegocio/public/storage/products/';
                move_uploaded_file($_FILES['image']['tmp_name'],$folder_final.$name_image);
                $image="http://localhost/minegocio/public/storage/products/".$name_image;

            }else{
                return redirect()->route('products.edit')->with('alert','Error en tipo de archivo o formato.');
               
            }
        }    

        $product->update([
            'name'=>$request->name,
            'mark_id'=>$request->mark_id,
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
        return redirect()->route('products.index')->with('success','Se edito un producto.');
        
        

    }

    public function destroy(Product $product){
        try {
            $product->delete();
            $id="all";
            return redirect()->route('products.index')->with('success','Se elimino un producto.');
        ;
        }catch (Exception $e) {
           
            return redirect()->route('products.index')->with('alert','No se pudo eliminar un producto porque esta asociado a una venta.');
        }
       
    }
}

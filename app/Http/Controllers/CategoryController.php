<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Exception;
use App\Http\Requests\CategoryValidate;
use Illuminate\Contracts\Session\Session as SessionSession;
use Illuminate\Http\Request;
use Livewire\Component;
use Livewire\Livewire;
use PhpParser\Node\Stmt\TryCatch;

class CategoryController extends Controller
{

    public function __construct()
    {
        $this->middleware('can:categories.create')->only('create'); 
        $this->middleware('can:categories.store')->only('store');
        $this->middleware('can:categories.edit')->only('edit'); 
        $this->middleware('can:categories.update')->only('update');
        $this->middleware('can:categories.destroy')->only('destroy');        
           
    }
    public function index(){
        return view('categories.show-categories');
    }

    public function create(){
        return view('categories.new-categories');

    }

    public function store(CategoryValidate $request){
      
        $image= $_FILES['image'];
        $name_image= $_FILES['image']['name'];
        $type_image= $_FILES['image']['type'];

        if (empty($name_image)) {
            $image="https://dummyimage.com/70x70/000000/fff&text=".$request->name
            ;
        }else{
            if ($type_image=="image/jpeg" or $type_image=="image/png" ) {

                $folder_final=$_SERVER['DOCUMENT_ROOT'].'/minegocio/public/storage/categories/';
                move_uploaded_file($_FILES['image']['tmp_name'],$folder_final.$name_image);
                $image="http://localhost/minegocio/public/storage/categories/".$name_image;

            }else{
                return redirect()->route('categories.create')->with('alert','En tipo de archivo o formato no es correcto.');
               
            }
        }     

        $category=Category::create([
            'name'=>$request->name,
            'image'=>$image,
            ]);
        return redirect()->route('categories.create')->with('success','Se ingreso una nueva categoría.');
           
    }

    public function edit($id){
        $category=Category::find($id);
        return view('categories.edit-categories',compact('category'));
  
    }

    public function update(CategoryValidate $request, Category $category){
        
        $image= $_FILES['image'];
        $name_image= $_FILES['image']['name'];
        $type_image= $_FILES['image']['type'];


        if (empty($name_image)) {
            $image="https://dummyimage.com/70x70/000000/fff&text=".$request->name
            ;
        }else{
            if ($type_image=="image/jpeg" or $type_image=="image/png" ) {

                $folder_final=$_SERVER['DOCUMENT_ROOT'].'/minegocio/public/storage/categories/';
                move_uploaded_file($_FILES['image']['tmp_name'],$folder_final.$name_image);
                $image="http://localhost/minegocio/public/storage/categories/".$name_image;

            }else{
                return redirect()->route('categories.create')->with('alert','En tipo de archivo o formato no es correcto.');
               
            }
        }     

        $category->update([
            'name'=>$request->name,
            'image'=>$image,
        ]);

        return redirect()->route('categories.index')->with('success','La categoria se actualizo correctamente');
    
    }
    public function destroy(Category $category){
        try{
            $category->delete();
            return redirect()->route('categories.index')->with('success','La categoria se elimino correctamente');
        }catch(Exception $e){
            return redirect()->route('categories.index')->with('alert','No se pudo eliminar la categoria porque esta asociada a un producto.');
        }
        
    }
}

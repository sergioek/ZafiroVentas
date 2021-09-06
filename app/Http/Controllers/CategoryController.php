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

                $folder_final=$_SERVER['DOCUMENT_ROOT'].'/storage/categories/';
                move_uploaded_file($_FILES['image']['tmp_name'],$folder_final.$name_image);
                $image="http://localhost/ventas/public/storage/categories/".$name_image;

            }else{
                return redirect()->route('categories.create')->with('error_file','En tipo de archivo o formato.');
               
            }
        }     

        $category=Category::create([
            'name'=>$request->name,
            'image'=>$image,
            ]);
        return redirect()->route('categories.create')->with('msg','Se ingreso una nueva categoría.');
           
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

                $folder_final=$_SERVER['DOCUMENT_ROOT'].'/storage/categories/';
                move_uploaded_file($_FILES['image']['tmp_name'],$folder_final.$name_image);
                $image="http://localhost/ventas/public/storage/categories/".$name_image;

            }else{
                return redirect()->route('categories.create')->with('error_file','En tipo de archivo o formato.');
               
            }
        }     

        $category->update([
            'name'=>$request->name,
            'image'=>$image,
        ]);

        return redirect()->route('categories.index')->with('msg','');
    
    }
    public function destroy(Category $category){
        try{
            $category->delete();
            return redirect()->route('categories.index')->with('success','yes');
        }catch(Exception $e){
            return redirect()->route('categories.index')->with('alert','nooo');
        }
        
    }
}

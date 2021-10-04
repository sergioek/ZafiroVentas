<?php

namespace App\Http\Controllers;

use App\Http\Requests\DenominationValidate;
use App\Models\Denominations;
use Illuminate\Http\Request;

class DenominationController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:denominations.index')->only('index'); 
        $this->middleware('can:denominations.show')->only('show'); 
        $this->middleware('can:denominations.create')->only('create'); 
        $this->middleware('can:denominations.store')->only('store');
        $this->middleware('can:denominations.edit')->only('edit'); 
        $this->middleware('can:denominations.update')->only('update');
        $this->middleware('can:denominations.destroy')->only('destroy'); 

    }

    public function index(){
        return view('denominations.show-denominations');
    }

    public function create(){
        return view('denominations.new-denominations');

    }

    public function store(DenominationValidate $request){

        $image= $_FILES['image'];
        $name_image= $_FILES['image']['name'];
        $type_image= $_FILES['image']['type'];

        if (empty($name_image)) {
            $image="https://dummyimage.com/70x70/000000/fff&text=".$request->type
            ;
        }else{
            if ($type_image=="image/jpeg" or $type_image=="image/png" ) {

                $folder_final=$_SERVER['DOCUMENT_ROOT'].'/storage/denominations/';
                move_uploaded_file($_FILES['image']['tmp_name'],$folder_final.$name_image);
                $image="http://localhost/minegocio/public/storage/denominations/".$name_image;

            }
        }     

        $denominations=Denominations::create([
            'type'=>$request->type,
            'value'=>$request->value,
            'image'=>$image,
            ]);
        return redirect()->route('denominations.create')->with('success','Se ingreso una nueva denominacion.');

    }

    public function destroy(Denominations $denomination){
        $denomination->delete();
        return redirect()->route('denominations.index')->with('success','Se elimino una denominacion.');
        ;

    }

    public function edit($id){
        $denomination=Denominations::find($id);
        return view ('denominations.edit-denominations',compact('denomination'));

    }

    public function update(DenominationValidate $request, Denominations $denomination){

        $image= $_FILES['image'];
        $name_image= $_FILES['image']['name'];
        $type_image= $_FILES['image']['type'];

        if (empty($name_image)) {
            $image="https://dummyimage.com/70x70/000000/fff&text=".$request->type
            ;
        }else{
            if ($type_image=="image/jpeg" or $type_image=="image/png" ) {

                $folder_final=$_SERVER['DOCUMENT_ROOT'].'/storage/denominations/';
                move_uploaded_file($_FILES['image']['tmp_name'],$folder_final.$name_image);
                $image="http://localhost/minegocio/public/storage/denominations/".$name_image;

            }
        }     
            
            $denomination->update([
                'type'=>$request->type,
                'value'=>$request->value,
                'image'=>$image,
            
            ]);

            return redirect()->route('denominations.index')->with('success','Se edito una denominacion');

                  
    }

}

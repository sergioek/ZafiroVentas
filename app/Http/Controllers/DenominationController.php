<?php

namespace App\Http\Controllers;

use App\Http\Requests\DenominationValidate;
use App\Models\Denominations;
use Illuminate\Http\Request;

class DenominationController extends Controller
{
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
                $image="http://localhost/ventas/public/storage/denominations/".$name_image;

            }else{
                return redirect()->route('denominations.create')->with('error_file','En tipo de archivo o formato.');
               
            }
        }     

        $denominations=Denominations::create([
            'type'=>$request->type,
            'value'=>$request->value,
            'image'=>$image,
            ]);
        return redirect()->route('denominations.create')->with('msg','Se ingreso una nueva denominacion.');

    }

    public function destroy(){

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
                $image="http://localhost/ventas/public/storage/denominations/".$name_image;

            }else{
                return redirect()->route('denominations.edit')->with('error_file','En tipo de archivo o formato.');
               
            }
            

            $denomination->update([
                'type'=>$request->type,
                'value'=>$request->value,
                'image'=>$image,
            ]);

            return redirect()->route('denominations')->with('msg','Se edito una denominacion.');
        
    }

}
}
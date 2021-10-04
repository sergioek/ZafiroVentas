<?php

namespace App\Http\Controllers;

use App\Http\Requests\CuestomerUpdateValidate;
use App\Http\Requests\CuestomerValidate;
use App\Models\Cuestomer;
use Exception;
use Illuminate\Http\Request;

class CuestomerController extends Controller
{

    public function __construct()
    {
        $this->middleware('can:cuestomers.index')->only('index'); 
        $this->middleware('can:cuestomers.show')->only('show'); 
        $this->middleware('can:cuestomers.create')->only('create'); 
        $this->middleware('can:cuestomers.store')->only('store');
        $this->middleware('can:cuestomers.edit')->only('edit'); 
        $this->middleware('can:cuestomers.update')->only('update');
        $this->middleware('can:cuestomers.destroy')->only('destroy');  
    }
    public function index(){
        return view('cuestomers.show-cuestomers');

    }
    public function show(){

    }

    public function create(){
        return view('cuestomers.new-cuestomer');

    }

    public function store(CuestomerValidate $request){
        $cuestomer=Cuestomer::create([
            'name'=>$request->name,
            'lastname'=>$request->lastname,
            'dni'=>$request->dni,
            'telephone'=>$request->telephone,
            'email'=>$request->email,
        ]);
        return redirect()->route('cuestomers.create')->with('success','Se ingreso un nuevo cliente.');
    }

    public function edit($id){
        $cuestomer=Cuestomer::find($id);
        return view('cuestomers.edit-cuestomer',compact('cuestomer'));

    }

    public function update(Cuestomer $cuestomer,CuestomerUpdateValidate $request){
    
        $cuestomer->update([
            'name'=>$request->name,
            'lastname'=>$request->lastname,
            'dni'=>$request->dni,
            'telephone'=>$request->telephone,
            'email'=>$request->email,
        ]);
        return redirect()->route('cuestomers.index')->with('success','Se actualizo un cliente.');
    }

    public function destroy(Cuestomer $cuestomer){
        
        try {
           $cuestomer->delete(); 
           return redirect()->route('cuestomers.index')->with('success','Se elimino un cliente.');
        }catch(Exception $e){
            return redirect()->route('cuestomers.index')->with('alert','No se pudo eliminar un cliente porque ya esta asociado a una/s ventas.');
        }
        
    }


}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\MarkValidate;
use App\Models\Mark;
use Exception;
use Illuminate\Http\Request;

class MarkController extends Controller
{

    public function __construct()
    {
        $this->middleware('can:marks.create')->only('create'); 
        $this->middleware('can:marks.store')->only('store');
        $this->middleware('can:marks.edit')->only('edit'); 
        $this->middleware('can:marks.update')->only('update');
        $this->middleware('can:marks.destroy')->only('destroy');  


    }
    public function index(){
        return view('marks.show-mark');
    }

    public function show(){

    }

    public function create(){
        return view('marks.new-mark');

    }

    public function store(MarkValidate $request){
        
        $mark=Mark::create($request->all());
        return redirect()->route('marks.create')->with('success','Se ingreso una nueva marca');
    }



    public function edit($id){
      $mark=Mark::find($id);
      return view('marks.edit-mark',compact('mark'));
    }

    public function update(MarkValidate $request,Mark $mark){
         $mark->update($request->all());
        return redirect()->route('marks.index')->with('success','Se actualizo una marca.');
    }

    public function destroy(Mark $mark){
        try{
            $mark->delete();
            return redirect()->route('marks.index')->with('success','Se elimino marca.');
        }catch(Exception $e){
            return redirect()->route('marks.index')->with('alert','No se pudo eliminar la marca porque esta asociado a un producto.');
        }
    }






}

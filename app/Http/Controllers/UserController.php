<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('can:users.index')->only('index');
        $this->middleware('can:users.show')->only('show');
        $this->middleware('can:users.create')->only('create'); 
        $this->middleware('can:users.store')->only('store');
        $this->middleware('can:users.edit')->only('edit'); 
        $this->middleware('can:users.update')->only('update');
        $this->middleware('can:users.destroy')->only('destroy');
       
    }
    public function index(){
        return view('users.user');
    } 


    public function edit($id){
        $roles=Role::all();
        $user=User::find($id);
        return view('users.user-edit',compact('user','roles'));

    }


    public function update(Request $request, User $user){
        $request->validate([
            'status'=>'required|string|max:20',
            'roles'=>'required',
        ]);
        $user->roles()->sync($request->roles);
        $user->update([
            'status'=>$request->status,
        ]);

        return redirect()->route('users.index')->with('success','Se actualizaron los permisos y estado de un usuario empleado');

    }

    public function destroy(User $user){

        try{
            $user->delete();
            return redirect()->route('users.index')->with('success','Se elimino un usuario.');

        }catch(Exception $e){

            return redirect()->route('users.index')->with('alert','No se pudo eliminar un usuario porque esta asociado a ventas.');
        }

        
    }
}

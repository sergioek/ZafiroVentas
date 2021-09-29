<?php

namespace App\Http\Controllers;

use App\Models\Box;
use App\Models\Sale;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BoxController extends Controller
{
    public function index(){
        $date=Carbon::now()->format('Y-m-d');
       $boxes=Box::all()->last();

       if($boxes->status!='CLOSE' && $boxes->date!=$date){
           $sales=Sale::all()->where('date',$boxes->date)->whereIn('status',['PAID','PENDING'])->sum('cash');
          $open=Box::all()->where('date',$boxes->date)->where('status','OPEN')->sum('amount');
          $extract=Box::all()->where('date',$boxes->date)->where('status','EXTRACT')->sum('amount');
           $box=Box::create([
            'date'=>$boxes->date,
            'status'=>'CLOSE',
            'amount'=>$sales+$open-$extract,
            'notes'=>'Cerrado automaticamente por sistema',
            'user_id'=>1,
        ]); 
        return redirect()->route('boxes.index')->with('alert','La caja se cerro automaticamente porque no fue cerrada de forma manual. Puede ver el detalle en la seccion movimientos.');
       }else{
        $date=Carbon::now()->format('Y-m-d');
        $sales=Sale::all()->where('date',$date)->whereIn('status',['PAID','PENDING'])->sum('cash');
        $openBox=Box::all()->where('date',$date)->where('status','OPEN');
        $open=$openBox->sum('amount');
        $extract=Box::all()->where('date',$date)->where('status','EXTRACT')->sum('amount');

        $total=$sales+$open-$extract;
        return view('boxes.box',compact('total'));


       }
      
    }


   
}

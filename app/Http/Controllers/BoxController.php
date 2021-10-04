<?php

namespace App\Http\Controllers;

use App\Http\Requests\BoxValidate;
use App\Models\Box;
use App\Models\Sale;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BoxController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:boxes.create')->only('create'); 
        $this->middleware('can:boxes.store')->only('store');
        $this->middleware('can:boxes.edit')->only('edit'); 
        $this->middleware('can:boxes.update')->only('update');
        $this->middleware('can:boxes.destroy')->only('destroy');  
    }

    public function index(){
        return view('boxes.box-show');
    }

    public function create(){
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
        return redirect()->route('boxes.create')->with('alert','La caja se cerro automaticamente porque no fue cerrada de forma manual. Puede ver el detalle en la seccion movimientos.');
       }else{

        if($boxes->status=='CLOSE'){
            $total=0;
            $state='CLOSE';
        }else{

            $date=Carbon::now()->format('Y-m-d');
            $sales=Sale::all()->where('date',$date)->whereIn('status',['PAID','PENDING'])->sum('cash');
            $open=Box::all()->where('date',$date)->where('status','OPEN')->sum('amount');
            $extract=Box::all()->where('date',$date)->where('status','EXTRACT')->sum('amount');
            $close=Box::all()->where('date',$date)->where('status','CLOSE')->sum('amount');
            $total=$sales+$open-$extract-$close;
            $state='OPEN';

        }
        
        return view('boxes.box',compact('total','state'));


       }
      
    }

    public function store(Request $request){
        $date=Carbon::now()->format('Y-m-d');
        $sales=Sale::all()->where('date',$date)->whereIn('status',['PAID','PENDING'])->sum('cash');
            $open=Box::all()->where('date',$date)->where('status','OPEN')->sum('amount');
            $extract=Box::all()->where('date',$date)->where('status','EXTRACT')->sum('amount');
            $amount=$sales+$open-$extract;

    if($request->status=='CLOSE'){
        if($request->amount<$amount){
            return redirect()->route('boxes.create')->with('alert','El cierre de caja es incosistente con las aperturas, ventas y extracciones. Revise la contabilidad y el dinero disponible.'); 
        }
    }

    if($request->status=='EXTRACT'){
        if($request->amount>$amount){
            return redirect()->route('boxes.create')->with('alert','No puede extraer mas dinero que el disponible.'); 
        }
    }

        
        $box=Box::create([
            'date'=>$date,
            'status'=>$request->status,
            'amount'=>$request->amount,
            'notes'=>$request->notes,
            'user_id'=>auth()->user()->id,
        ]);

        return redirect()->route('boxes.create')->with('success','Se ejecuto una operacion ' . $request->status . ' '.'sobre la caja');

    }

   
}

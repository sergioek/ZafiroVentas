<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ReportController extends Controller
{

    public function __construct()
    {
        $this->middleware('can:reports.index')->only('index'); 
        $this->middleware('can:reports.month')->only('month');
        
    }
    public function index(){

        $seven = Carbon::now()->subDay(7)->format('Y-m-d');
        $six = Carbon::now()->subDay(6)->format('Y-m-d');
        $five = Carbon::now()->subDay(5)->format('Y-m-d');
        $four = Carbon::now()->subDay(4)->format('Y-m-d');
        $three = Carbon::now()->subDay(3)->format('Y-m-d');
        $two = Carbon::now()->subDay(2)->format('Y-m-d');
        $one = Carbon::now()->subDay(1)->format('Y-m-d');
        $today = Carbon::now()->format('Y-m-d');
       ///////////////////////////////////////
        $sales_seven=Sale::where('date',$seven)->whereIn('status',['PAID','PENDING'])->sum('cash');
    
        $sales_six=Sale::where('date',$six)->whereIn('status',['PAID','PENDING'])->sum('cash');
        
        $sales_five=Sale::where('date',$five)->whereIn('status',['PAID','PENDING'])->sum('cash');
    
        $sales_four=Sale::where('date',$four)->whereIn('status',['PAID','PENDING'])->sum('cash');
    
        $sales_three=Sale::where('date',$three)->whereIn('status',['PAID','PENDING'])->sum('cash');
    
        $sales_two=Sale::where('date',$two)->whereIn('status',['PAID','PENDING'])->sum('cash');
    
        $sales_one=Sale::where('date',$one)->whereIn('status',['PAID','PENDING'])->sum('cash');
    
        $sales_today=Sale::where('date',$today)->whereIn('status',['PAID','PENDING'])->sum('cash');
    
        $total=$sales_today+$sales_one+$sales_two+$sales_three+$sales_four+$sales_six+$sales_seven;
    
        return view('reports.report-week',compact('today','one','two','three','four','five','six','seven','sales_today','sales_one','sales_two','sales_three','sales_four','sales_five','sales_six','sales_seven','total'));

    }


    public function month(){
        $seven = Carbon::now()->subDay(7)->format('Y-m-d');


        $fourteen = Carbon::now()->subDay(14)->format('Y-m-d');

        $twentyone = Carbon::now()->subDay(21)->format('Y-m-d');

        $thirty = Carbon::now()->subDay(30)->format('Y-m-d');

        

        $week=Sale::where('date','>',$seven)->whereIn('status',['PAID','PENDING'])->sum('cash');

        $twoweek=Sale::where('date','>',$fourteen)->where('date','<',$seven)->whereIn('status',['PAID','PENDING'])->sum('cash');

        $threeweek=Sale::where('date','>',$twentyone)->where('date','<',$fourteen)->whereIn('status',['PAID','PENDING'])->sum('cash');

        
        $fourweek=Sale::where('date','>',$thirty)->where('date','<',$twentyone)->whereIn('status',['PAID','PENDING'])->sum('cash');

        $total=$week+$twoweek+$threeweek+$fourweek;
        return view('reports.report-month',compact('week','twoweek','threeweek','fourweek','total'));


    }
}

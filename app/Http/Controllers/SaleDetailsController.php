<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\SaleDetails;
use Illuminate\Http\Request;

class SaleDetailsController extends Controller
{
    public function show($id){

        $company=Company::find(1);
        $sales=SaleDetails::all()->where('sale_id',$id);
        return view('sales.sale-details',compact('sales','company'));
        
    }

    public function index(){
        return redirect()->route('sales.index');
    }
}

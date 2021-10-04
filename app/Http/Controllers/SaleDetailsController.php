<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Product;
use App\Models\Sale;
use App\Models\SaleDetails;
use Illuminate\Http\Request;

class SaleDetailsController extends Controller
{

    public function __construct()
    {
        $this->middleware('can:detailsale.index')->only('index'); 
        $this->middleware('can:detailsale.show')->only('show'); 
    }
    public function show($id){

        $company=Company::find(1);
        $sale=Sale::find($id);
        $details=SaleDetails::all()->where('sale_id',$id);
        return view('sales.sale-details',compact('details','company','sale'));
        
    }

    public function index(){
        return redirect()->route('sales.index');
    }


}

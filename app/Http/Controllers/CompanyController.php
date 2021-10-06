<?php

namespace App\Http\Controllers;

use App\Http\Requests\CompanyValidate;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{

    public function __construct()
    {
        $this->middleware('can:companies.edit')->only('edit'); 
        $this->middleware('can:companies.update')->only('update');
    }

    public function edit($id){
        $company=Company::find($id);
        return view('company.company',compact('company'));
    }


    public function update(CompanyValidate $request, Company $company){

        $company->update([
            'name'=>$request->name,
            'address'=>$request->address,
            'phone'=>$request->phone,
            'CUIT'=>$request->CUIT,
        ]);

        return redirect()->route('dashboard.index')->with('success','Los datos de la empresa fueron modificados.');

    }
}

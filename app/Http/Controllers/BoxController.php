<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BoxController extends Controller
{
    public function index(){
        return view('boxes.box');
    }


   
}

<?php

namespace App\Http\Controllers\FrontendController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class productcontroller extends Controller
{
    //this product controller
    public function productdetail(){
        return view('layouts.Productdeatil');

    }
}

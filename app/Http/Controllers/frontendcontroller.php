<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class frontendcontroller extends Controller
{
    public function index(){
        return view('layouts.Index');
    }
    public function shopdetail(){
        return view('layouts.Shop');
    }
    public function productdetail(){
        return view('layouts.Productdeatil');
    }
    public function cartdetail(){
        return view('layouts.Cart');
    }

   public function checkoutdetail(){
        return view('layouts.Checkout');
    }

}

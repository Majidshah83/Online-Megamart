<?php

namespace App\Http\Controllers\FrontEndControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{  //This is Checkout Controller
    public function checkoutdetail(){
        return view('layouts.Checkout');
    }
}

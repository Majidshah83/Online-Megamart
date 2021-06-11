<?php

namespace App\Http\Controllers\FrontendController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Checkoutcontroller extends Controller
{
     public function checkoutdetail(){
          return view('layouts.Checkout');
    }
}

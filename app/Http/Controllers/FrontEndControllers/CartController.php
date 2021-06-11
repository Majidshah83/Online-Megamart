<?php

namespace App\Http\Controllers\FrontEndControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartController extends Controller
{         //This is Cartcontroller
      public function cartdetail(){
        return view('layouts.Cart');
    }
}

<?php

namespace App\Http\Controllers\FrontendController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class shopcontroller extends Controller
{
    public function shopdetail(){
      //This is shop controller
      return view('layouts.Shop');
    }

}

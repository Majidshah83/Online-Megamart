<?php

namespace App\Http\Controllers\FrontendController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Cartcontroller extends Controller
{
    public function cartdetail(){
        return view('layouts.Cart');
    }
}

<?php

namespace App\Http\Controllers\FrontEndControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Productcontroller extends Controller
{
    public function productdetail(){
        return view('layouts.Productdeatil');
    }
}

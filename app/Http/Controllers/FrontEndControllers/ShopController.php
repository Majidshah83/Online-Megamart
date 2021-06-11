<?php

namespace App\Http\Controllers\FrontEndControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Shopcontroller extends Controller
{
     public function shopdetail(){
        return view('layouts.Shop');
    }
}

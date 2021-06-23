<?php

namespace App\Http\Controllers\FrontendController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class maincontroller extends Controller
{
    public function index(){
        //this index controller
       return view('layouts.Index');

    }
     public function dashboard(){
        //this index controller
       return view('AdminDashboard.dashboard');

    }
}

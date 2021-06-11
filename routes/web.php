<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontEndControllers\Maincontroller;
use App\Http\Controllers\FrontEndControllers\Shopcontroller;
use App\Http\Controllers\FrontEndControllers\Checkoutcontroller;
use App\Http\Controllers\FrontEndControllers\CartController;
use App\Http\Controllers\FrontEndControllers\Productcontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('layouts.Index');
// });
Route::get('/',[Maincontroller::class ,'index']);
Route::get('/Shop',[Shopcontroller::class ,'shopdetail']);
Route::get('/Productdeatil',[Productcontroller::class ,'productdetail']);
Route::get('/cart',[CartController::class,'cartdetail']);
Route::get('/checkout',[Checkoutcontroller::class,'checkoutdetail']);


// Route::get('/Shop', function () {
//     return view('layouts.Shop');
// });
// Route::get('/', function () {
//     return view('layouts.Index');
// });

// Route::get('/Productdeatil', function () {
//     return view('layouts.Productdeatil');
// });

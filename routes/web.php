<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\FrontEndControllers\Maincontroller;
// use App\Http\Controllers\FrontEndControllers\Shopcontroller;
// use App\Http\Controllers\FrontEndControllers\Checkoutcontroller;
// use App\Http\Controllers\FrontEndControllers\CartController;
// use App\Http\Controllers\FrontEndControllers\Productcontroller;
use App\Http\Controllers\FrontendController\maincontroller;
use App\Http\Controllers\FrontendController\shopcontroller;
use App\Http\Controllers\FrontendController\productcontroller;
use App\Http\Controllers\FrontendController\Cartcontroller;
use App\Http\Controllers\FrontendController\Checkoutcontroller;


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
// Route::get('/',[Maincontroller::class ,'index']);
// Route::get('/Shop',[Shopcontroller::class ,'shopdetail']);
// Route::get('/Productdeatil',[productcontroller::class ,'productdetail']);
// Route::get('/cart',[CartController::class,'cartdetail']);
// Route::get('/checkout',[Checkoutcontroller::class,'checkoutdetail']);
Route::get('/',[maincontroller::class ,'index']);
Route::get('/Shop',[shopcontroller::class ,'shopdetail']);
Route::get('/Productdeatil',[productcontroller::class ,'productdetail']);
Route::get('/cart',[cartcontroller::class,'cartdetail']);
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

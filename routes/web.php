<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontendcontroller;

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
Route::get('/',[frontendcontroller::class ,'index']);
Route::get('/Shop',[frontendcontroller::class ,'shopdetail']);
Route::get('/Productdeatil',[frontendcontroller::class ,'productdetail']);
Route::get('/cart',[frontendcontroller::class,'cartdetail']);
Route::get('/checkout',[frontendcontroller::class,'checkoutdetail']);


// Route::get('/Shop', function () {
//     return view('layouts.Shop');
// });
// Route::get('/', function () {
//     return view('layouts.Index');
// });

// Route::get('/Productdeatil', function () {
//     return view('layouts.Productdeatil');
// });

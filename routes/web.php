<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\RegisterController;
// use App\Http\Controllers\LoginController;
// use App\Http\Controllers\AdminController;
// use App\Http\Controllers\CouponController;
use App\Http\Middleware\CheckAuthMiddleware;
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

// Route::get('/login', function () {
//     return view('registerview');
// });




Route::get('/','App\Http\Controllers\RegisterController@viewregister');
Route::post('/register','App\Http\Controllers\RegisterController@register');
// Route::get('/login','App\Http\Controllers\LoginController@viewlogin');
Route::post('/userlogin','App\Http\Controllers\LoginController@userlogin');


Route::middleware([ CheckAuthMiddleware::class])->group(function(){
Route::get('/userdashboard','App\Http\Controllers\CartController@userdashboard');

Route::post('/buy','App\Http\Controllers\AdminController@savecart');




// Route::get('/coupons','App\Http\Controllers\CouponController@listcoupons');
//   Admin Routes
Route::get('/admindashboard','App\Http\Controllers\AdminController@admindashboard');

Route::get('/addcoupon','App\Http\Controllers\CouponsController@addcouponview');
Route::post('/addcoupon','App\Http\Controllers\CouponsController@add');
Route::get('/editcoupon/{id}','App\Http\Controllers\CouponsController@viewcoupon');
Route::post('/updatecoupon/{id}','App\Http\Controllers\CouponsController@updatecoupon');
Route::get('/delete/{id}','App\Http\Controllers\CouponsController@deletecoupon');
Route::get('/listusercoupons','App\Http\Controllers\CouponsController@list_usercoupons');

});

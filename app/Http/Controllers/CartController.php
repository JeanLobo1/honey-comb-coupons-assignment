<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CartItems;
use App\Models\Coupons;
class CartController extends Controller
{
    public function userdashboard(Request $request){

      $products=['car1','car2','car3','car4','car5','car6'];
      $coupons= Coupons::pluck('coupon_name');
        // $coupons = CartItems::where("user_id",$request->user_id)->select("id",'coupon_code','coupon_name')
        //     ->orderBy('id','desc')->get();
        
         return view('userdashboard',['products'=>$products,'coupons'=>$coupons]);
     }
}

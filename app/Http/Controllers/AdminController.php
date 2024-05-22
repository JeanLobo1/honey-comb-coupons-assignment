<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coupons;
use App\Models\CartItems;
class AdminController extends Controller
{
    public function admindashboard(Request $request){ 

        $coupons = Coupons::where("user_id",$request->user_id)->select("id",'coupon_code','coupon_name')
            ->orderBy('id','desc')->get();
            // ->paginate(10);
        return view("admin.admindashboard",['coupons'=>$coupons]);
     }

     public function savecart(Request $request){
        $param_arr = $request->all();
        
        unset(
            $param_arr['_token'], 
            $param_arr['email'],
            $param_arr['role']
            );
            $coupon_code=Coupons::where('coupon_code',$param_arr['selectedCoupon'])->first();
           
            $param_arr["coupon_code"]= $coupon_code->coupon_code??null;
            $param_arr["product_price"]  = 120;
            $param_arr["discount_percent"]  =$coupon_code->percentage??null;
            $param_arr["total_price"] = $param_arr["product_price"]- ($param_arr["product_price"] * $param_arr["discount_percent"] /100);
            unset(
                $param_arr['selectedCoupon']
                );
            $db = new CartItems();
            $dbresp =   $db->insert_data($param_arr);
            $products=['car1','car2','car3','car4','car5','car6'];
            $coupons= Coupons::pluck('coupon_name');
        return view("userdashboard",['products'=>$products,'coupons'=>$coupons]);
     }
}

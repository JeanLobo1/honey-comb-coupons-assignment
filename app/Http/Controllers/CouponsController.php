<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CartItems;
use App\Models\Coupons;

class CouponsController extends Controller
{

    public function addcouponview(){

    return view('admin.addcoupon');
    }

    public function add(Request $request){

        $params = $request->all(); 

        unset( $params['_token'] , $params['role'] ,$params['email'] );
     
         $db = new Coupons();
         $dbresp =   $db->insert_data($params);

        return view('admin.addcoupon');
        }

    public function viewcoupon($id,Request $request){

       $coupon= Coupons::where("id",$id)->first();
       
        return view('admin.viewcoupon',['coupon'=>$coupon]);
    }
 
    
    public function updatecoupon($id,Request $request){
        $param_arr = $request->all();
      
        unset(
            $param_arr['_token'], 
            $param_arr['email'],
            $param_arr['role']
            );
        
        $db_product = new Coupons();
        $db_product->update_data($param_arr,  $id
    );
        return redirect("/editcoupon/".$id); 
        // return view('admin.viewcoupon');   
    }

    public function deletecoupon($id,Request $request){
        Coupons::where('id', $id)->delete();
        return redirect('/admindashboard');
    }
    public function list_usercoupons(Request $request){
        
        $cartitem = CartItems::join('users', 'cart_item.user_id', '=', 'users.id')
        ->select('coupon_code', 'users.name as user_name', 'product_name','product_price','total_price')
        ->wherenotnull('coupon_code')
        ->orderBy('cart_item.id')
        ->get();
        // ->paginate(10);


    return view("admin.listuserscoupon",['cartitem'=> $cartitem]);    
    }
}

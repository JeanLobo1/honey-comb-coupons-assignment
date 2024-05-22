<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class LoginController extends Controller
{
   

    public function userlogin(Request $request){ 
        

        $params = $request->all(); 

        $db = new User();

        $param_arr = array ("email"=> $params["email"], "password"=>$params["password"], "role"=>$params["role"]);
      
        $dbresp =   $db->check_login($param_arr);



        if( $dbresp != null && $dbresp["password"] == $params["password"] && $params["role"]=="user" ) {
         
            $request->session()->put('UserKey', $dbresp->toArray());
            return redirect('/userdashboard'); 

        }else if($dbresp != null && $dbresp["password"] == $params["password"] && $params["role"]=="admin" ){
  
            $request->session()->put('UserKey', $dbresp->toArray());
            return redirect('/admindashboard'); 
        }else {
           return redirect('/');
            
        }
    }

    public function viewlogin(){
        return view('registerview');
    }
}

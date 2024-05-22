<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
     public function viewregister(Request $request){ 
        
        return view("registerview");
     }


     public function register(Request $request){ 
        
      $params = $request->all(); 

     unset( $params['_token'] );

     
      $db = new User();
      $dbresp =   $db->insert_data($params);


      return view("registerview")->with('message', 'success');
   }

     
}

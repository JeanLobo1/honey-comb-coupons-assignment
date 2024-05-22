<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupons extends Model
{
    use HasFactory;
    protected $table = "coupons";

    protected $guarded = [];
    public function insert_data($inputs){
        // try {
          return Coupons::create($inputs);
        // } catch (\Exception $ex) {	return -1; }
      }//

      public function update_data($inputs, $id){
        return Coupons::where('id', $id)->update($inputs);
       }//
}

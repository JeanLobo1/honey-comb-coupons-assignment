<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItems extends Model
{
    use HasFactory;
    protected $table = "cart_item";
    protected $guarded = [];

    public function insert_data($inputs){
        // try {
          return CartItems::create($inputs);
        // } catch (\Exception $ex) {	return -1; }
      }//
}

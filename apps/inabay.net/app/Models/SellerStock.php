<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SellerStock extends Model
{
    public $timestamps = false;

    public function product(){
        return $this->belongsTo(Product::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
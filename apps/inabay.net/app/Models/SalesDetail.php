<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SalesDetail extends Model
{
    public $timestamps = false;

    public function sales(){
        return $this->belongsTo(Sales::class);
    }

    public function product(){
        return $this->belongsTo(Product::class);
    }

    public function getMaskedPriceAttribute(){
        return number_format($this->attributes['price'], 0);
    }

    public function getMaskedSubTotalAttribute(){
        $subtotal = $this->attributes['qty'] * $this->attributes['price'];
        return number_format($subtotal, 0);
    }
}
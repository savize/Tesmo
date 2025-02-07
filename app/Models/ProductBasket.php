<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductBasket extends Model
{
    use HasFactory;
    protected $fillable = ['product_id', 'brand_id', 'count', 'user_id', 'status', 'basket_id'];


    public function product(){
        return $this->belongsTo(Products::class)->first();
    }

    public function brand()
    {
        return $this->belongsTo(Brands::class)->first();
    }

}

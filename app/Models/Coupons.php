<?php

namespace App\Models;

use App\Models\Products;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Coupons extends Model
{
    use HasFactory;
    protected $table = "coupons";
    protected $primaryKey = "coupon_id";

    protected $fillable = [
        "name", "code", "margin", "product_id"
    ];

    public function product(){
        $this->hasMany(Products::class);
    }
}

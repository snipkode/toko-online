<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){

        $data['title'] = "Semua Produk";
        $data['hasil'] = Products::leftJoin("coupons", "products.id", "=", "coupons.product_id")
                         ->select("products.name AS product_name", "coupons.name AS coupon_name", "coupons.code AS kode", "coupons.margin AS disc", "products.link", "products.id AS product_id","products.price AS harga", "products.description", "products.created_at AS dibuat")
                         ->get();
        // return dd($data);
        return view("admin.pages.produk.index", $data);
    }
}

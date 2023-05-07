<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){

        $data['title'] = "Semua Produk";
        $data['hasil'] = Products::all();

        return view("admin.pages.produk.index", $data);
    }
}

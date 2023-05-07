<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        return view("admin.dashboard");
    }

    public function produk(){
        return view("admin.pages.produk.index");
    }

    public function sales(){
        return view("admin.pages.penjualan.index");
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function dashboard(){
        $isAdmin = Auth::user()->hasRole('admin');
        if($isAdmin) return redirect('/admin/dashboard');
        return view('dashboard', compact(['isAdmin']));
    }
}

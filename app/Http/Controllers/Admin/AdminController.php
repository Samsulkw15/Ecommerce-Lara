<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        $products = Product::count();
        $Users = User::count();

        return view('pages.admin.index', compact('products', 'Users'));
    }
}

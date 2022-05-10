<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $prod_count = Product::all()->count();
        return view('admin.home.index', [
            'prod_count' => $prod_count
        ]);
    }
}

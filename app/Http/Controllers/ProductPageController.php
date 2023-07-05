<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;

class ProductPageController extends Controller
{
    //
    public function index(){
        $data = Product::all();
        return view('buyer.product-list',compact('data'));
    }

}

<?php

namespace App\Http\Controllers\Product;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function list(){
        return view('product.list');
    }

    public function details(){
        return view('product.details');
    }

}

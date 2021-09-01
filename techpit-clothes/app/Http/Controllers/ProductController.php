<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function index()
    {
        //bladeのproduct/index.bladeを返す
        return view('product.index')
            ->with('products', Product::get());
    }
}

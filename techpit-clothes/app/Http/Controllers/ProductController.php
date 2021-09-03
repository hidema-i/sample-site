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
    //引数$idはrouteで設定したid
    public function show($id)
    {
        //findで引数にidを指定することで紐付くidを取得
        return view('product.show')
            ->with('product', Product::find($id));
    }
}

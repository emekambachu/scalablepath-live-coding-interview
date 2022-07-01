<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('products');
    }

    public function getProducts(){
        $products = Product::all();
        return response()->json([
           'success' => true,
           'products' => $products,
        ]);
    }

    public function deleteProduct($id){
        $product = Product::where('id', $id)->delete();
        return response()->json([
            'success' => true,
        ]);
    }
}

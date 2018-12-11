<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;


class BookController extends Controller
{
    public function getIndex() 
    {
        $products = Product::orderBy('created_at', 'desc')->paginate(10);

        return view('book.index')->withProducts($products);
    }
    public function getSingle($id) 
    {
        $product = Product::where('id', '=', $id)->first();

        return view('book.single')->withProduct($product);
    }
}

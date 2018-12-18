<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

use App\Http\Requests;
use App\Shop;
use App\Product;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('pages.shop')->with('products', $products);


    }
        public function show($slug)
        {
            $product = Product::where('slug', $slug)->firstOrFail();
            $interested = Product::where('slug', '!=', $slug)->get()->random(4);

            return view('shop')->with(['product' => $product, 'interested' => $interested]);
        }


}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class getAddtoCartController extends Controller
{
        public function getAddtoCart(Request $request, $id)
    {
        //return 'hello';

        $product = Product::find($id);

        //echo "<pre>"; print_r($product); die();

        $oldCart = Session::has('cart') ? Session::get('cart') : null;

        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);

        $request->session()->put('cart',$cart);
        dd(($request->session()->get('cart')));

        return redirect('/shop');

    }
}

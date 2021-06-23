<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use App\Cart;
use Illuminate\Http\Request;
use Session;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::latest()->paginate(6);
        $related_products = Product::relate();

        return view('products.index',compact('products','related_products'));
    }

    /**
     * Show the category products.
     *
     * @return \Illuminate\Http\Response
     */
    public function category($category)
    {
        $products = Product::category($category);
        $related_products = Product::relate();

        return view('products.index',compact('products','related_products'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($product)
    {
        $product = Product::findOrFail($product);
        $related_products = Product::relate();

        return view('products.detail',compact('product','related_products'));
    }

    /**
     * add to cart product.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addToCart(Request $request,$id)
    {
        $qty = 1;
        $product = Product::findOrFail($id);
        $oldCart = Session::has('cart') ? Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->addToCart($product,$product->id,$product->qty,$qty);
        $request->session()->put('cart',$cart);

        return response()->json(['msg'=>$cart->status,'totalQty'=>$cart->totalQty]);
    }

}

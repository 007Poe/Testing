<?php

namespace App\Http\Controllers;

use App\WishList;
use App\Product;
use Illuminate\Http\Request;

class WishListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function wishList()
    {
       $count = WishList::where('ip',$_SERVER['REMOTE_ADDR'])->count();
       return response()->json(['count'=>$count]);
   }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addToWishList(Request $request,$id)
    {
         $product = Product::find($id);
         $wishlist = new WishList;
         $wishlist->ip = $_SERVER['REMOTE_ADDR'];
         $wishlist->product_id = $product->id;
         $wishlist->save();
         return response()->json(['msg'=>'success']);
    }

    public function removeWishlist(Request $request,$id)
    {
         $product = Product::find($id);
         WishList::where([['ip',$_SERVER['REMOTE_ADDR']],['product_id',$product->id]])->delete();
         return response()->json(['msg'=>'success']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\WishList  $wishList
     * @return \Illuminate\Http\Response
     */
    public function show(WishList $wishList)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\WishList  $wishList
     * @return \Illuminate\Http\Response
     */
    public function edit(WishList $wishList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\WishList  $wishList
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, WishList $wishList)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\WishList  $wishList
     * @return \Illuminate\Http\Response
     */
    public function destroy(WishList $wishList)
    {
        //
    }
}

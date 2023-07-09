<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class CartController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addToCart(Product $product)
    {
        $cart = Cart::whereProductId($product->id)->whereUserId(Auth::id())->first();

        if($cart) {
            $cart->update([
                'quantity' => $cart->quantity+1,
            ]);
        } else {
            $cart = Cart::create([
                'user_id'    => Auth::id(),
                'product_id' => $product->id,
                'quantity'   => 1,
            ]);
        }

        alert()->success('Berhasil','Produk Ditambahkan ke Keranjang!')->persistent();
        return back();
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cart $cart)
    {
        $cart->delete();

        alert()->success('Berhasil','Produk Berhasil Dihapus dari Keranjang!')->persistent();
        return back();
    }
}

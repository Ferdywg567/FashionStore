<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomePageController extends Controller
{
//    public function __construct()
//    {
//        $carts = Cart::whereUserId(Auth::id())->get();
//        view()->share('carts', $carts);
//    }

    public function getByCategory($id){
        return Product::whereHas('categories', function ($q) use($id) {
            $q->where('categories.id',$id);
        })->get();
    }
    //
    public function index()
    {
        $carts = Cart::whereUserId(Auth::id())->get();
        $listOfNewArrival = $this->getByCategory(1);
        $listOfDeal       = $this->getByCategory(2);
        $listOfProduct    = Product::all();
        $listOfClothes    = $this->getByCategory(3);
        $listOfCosmetics  = $this->getByCategory(4);
        $listOfFormal     = $this->getByCategory(8);

        return view('user.home', compact('listOfNewArrival','listOfDeal','listOfProduct','listOfClothes','listOfCosmetics','listOfFormal','carts'));
    }

    public function histories() {
        $carts = Cart::whereUserId(Auth::id())->get();
        $transactions = Transaction::whereUserId(Auth::id())->latest()->get();

        return view('user.history', compact('transactions','carts'));
    }

}

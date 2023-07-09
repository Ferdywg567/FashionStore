<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomePageController extends Controller
{

    public function getByCategory($id){
        return Product::whereHas('categories', function ($q) use($id) {
            $q->where('categories.id',$id);
        })->get();
    }
    //
    public function index()
    {
        $listOfNewArrival = $this->getByCategory(1);
        $listOfDeal       = $this->getByCategory(2);
        $listOfProduct    = Product::all();
        $listOfClothes    = $this->getByCategory(3);
        $listOfCosmetics  = $this->getByCategory(4);
        $listOfFormal     = $this->getByCategory(8);
        $carts            = Cart::whereUserId(Auth::id())->get();
        return view('user.home', compact('listOfNewArrival','listOfDeal','listOfProduct','listOfClothes','listOfCosmetics','listOfFormal', 'carts'));
    }

}

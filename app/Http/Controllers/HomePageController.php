<?php

namespace App\Http\Controllers;

use App\Models\Product;

use Illuminate\Http\Request;

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
        $listOfDeal = $this->getByCategory(2);
        $listOfProduct = Product::all();
        $listOfClothes = $this->getByCategory(3);
        $listOfCosmetics = $this->getByCategory(4);
        $listOfFormal = $this->getByCategory(8);
        return view('user.home', compact('listOfNewArrival','listOfDeal','listOfProduct','listOfClothes','listOfCosmetics','listOfFormal'));
    }

}

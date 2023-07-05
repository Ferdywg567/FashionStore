<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Brand;
use App\Models\ProductType;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $queryModel = Product::all();
        return view('admin.product.index', compact('queryModel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $brands = Brand::all();
        $producttypes = ProductType::all();
        return view('admin.product.formcreate', compact('brands','producttypes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = new Product();
        $data->name= $request->get('namaprod');
        $data->price= $request->get('hargajual');
        $data->stock= $request->get('stock');
        $data->size= $request->get('sizes');
        $data->description= $request->get('desc');
        $data->image= $request->get('images');
        $data->product_type_id= $request->get('product_type_id');
        $data->brand_id= $request->get('brand_id');
        $data->save();
        return redirect()->route('product.index')->with('status','Horray!! Your new product data is already inserted');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

        $data = Product::find($id);


        return view('product.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $objProduct = Product::find($id);
        $producttypes = ProductType::all();
        $brands = Brand::all();
        $data=$objProduct;
        return view ('admin.product.formedit',compact('data','producttypes','brands'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $objProduct = Product::find($id);
        $objProduct->name = $request->get('namaprod');
        $objProduct->price = $request->get('hargajual');
        $objProduct->stock= $request->get('stock');
        $objProduct->size= $request->get('sizes');
        $objProduct->description= $request->get('desc');
        $objProduct->image= $request->get('images');
        // $objProduct->product_type_id= $request->get('product_type_id');
        // $objProduct->brand_id= $request->get('brand_id');
     
        $objProduct->save();
        return redirect()->route('product.index')->with('status', 'Your Product is already up-to-date');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        try{
            $objProduct = Product::find($id);
            $objProduct->delete();
            return redirect()->route('product.index')->with('status', 'Your Product is already removed');


        }catch(\PDOException $ex)
        {
            $msg = "Data Gagal dihapus. Pastikan kembali tidak ada data yang berelasi sebelum dihapus";
            return redirect()->route('product.index')->with('status',$msg);
        }
    }
}

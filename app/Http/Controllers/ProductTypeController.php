<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ProductType;


class ProductTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $queryModel = ProductType::all();
        return view('admin.producttype.index', compact('queryModel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.producttype.formcreate');
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
         $data = new ProductType();

        $data->name= $request->get('nameproducttype');
      
        $data->save();
        return redirect()->route('producttype.index')->with('status','Horray!! Your new product type data is already inserted');
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
           $objProductType = ProductType::find($id);
        // dd($objCategory,$id);
        $data=$objProductType;
        return view ('admin.producttype.formedit',compact('data'));
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
        $objProductType = ProductType::find($id);
        $objProductType->name = $request->get('nameproducttype');
   
        $objProductType->save();
        return redirect()->route('producttype.index')->with('status', 'Your Product Type is already up-to-date');
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
            $objProductType = ProductType::find($id);
            $objProductType->delete();
            return redirect()->route('producttype.index')->with('status', 'Your Product Type is already removed');


        }catch(\PDOException $ex)
        {
            $msg = "Data Gagal dihapus. Pastikan kembali tidak ada data yang berelasi sebelum dihapus";
            return redirect()->route('producttype.index')->with('status',$msg);
        }
    }
}

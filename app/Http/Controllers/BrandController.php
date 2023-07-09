<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Brand;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $queryModel = Brand::all();
        return view('admin.brand.index', compact('queryModel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.brand.formcreate');
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
        $data = new Brand();

        $data->name = $request->get('name');

        $data->save();

        return redirect()->route('brand.index')->with('status', 'Horray!! Your new brand data is already inserted');
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
        $objBrand = Brand::find($id);
        // dd($objCategory,$id);
        $data = $objBrand;
        return view('admin.brand.formedit', compact('data'));
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
        $objBrand = Brand::find($id);
        $objBrand->name = $request->get('namebrand');

        $objBrand->save();
        return redirect()->route('brand.index')->with('status', 'Brand updated Successfully!');
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
        try {
            $objBrand = Brand::find($id);
            $objBrand->delete();
            return redirect()->route('brand.index')->with('status', 'Your Brand is already removed');
        } catch (\PDOException $ex) {
            $msg = "Data Gagal dihapus. Pastikan kembali tidak ada data yang berelasi sebelum dihapus";
            return redirect()->route('brand.index')->with('status', $msg);
        }
    }
}

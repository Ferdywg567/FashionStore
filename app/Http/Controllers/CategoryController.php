<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $queryModel = Category::all();
        return view('admin.category.index', compact('queryModel'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.category.formcreate');
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
        $data = new Category();

        $data->name = $request->get('namecate');
      
        $data->save();

        return redirect()->route('category.index')->with('status','Horray!! Your new category data is already inserted');

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
        $objCategory = Category::find($id);
        // dd($objCategory,$id);
        $data=$objCategory;
        return view ('admin.category.formedit',compact('data'));
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
        $objCategory = Category::find($id);
        $objCategory->name = $request->get('namecate');
   
        $objCategory->save();
        return redirect()->route('category.index')->with('status', 'Your Category is already up-to-date');
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
            $objCategory = Category::find($id);
            $objCategory->delete();
            return redirect()->route('category.index')->with('status', 'Your Category is already removed');


        }catch(\PDOException $ex)
        {
            $msg = "Data Gagal dihapus. Pastikan kembali tidak ada data yang berelasi sebelum dihapus";
            return redirect()->route('category.index')->with('status',$msg);
        }
    }
}

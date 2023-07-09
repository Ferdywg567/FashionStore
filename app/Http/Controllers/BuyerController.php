<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Buyer;
use App\Models\User;

class BuyerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::where('role_id', 3)->orderBy('created_at', 'desc')->get();
        return view('admin.buyer.index', compact('users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $buyer)
    {
        $buyer->update($request->except(['_token', 'membership_poin']));

        $buyer->membership()->update([
            'jumlah_poin' => $request->membership_poin,
        ]);

        return redirect()->route('buyer.index')->with('success', 'Buyer removed succesfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $buyer)
    {
        $buyer->delete();

        return redirect()->route('buyer.index')->with('success', 'Buyer removed succesfully!');
    }
}

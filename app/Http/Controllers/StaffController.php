<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function index() {
        $users = User::where('role_id', '!=', 3)->orderBy('role_id', 'asc')->get();
        return view('admin.staff.index', compact('users'));
    }

    public function store(Request $request) {
        // dd($request);
        $staff = new User($request->all());

        $staff->password = bcrypt('12345678');
        $staff->save();

        return redirect()->route('staff.index')->with('success', 'Staff Created succesfully!');
    }

    public function update(Request $request, User $staff) {
        $staff->update($request->except(['_token']));

        return redirect()->route('staff.index')->with('success', 'Staff updated succesfully!');
    }

    public function destroy(User $staff) {
        $staff->delete();

        return redirect()->route('staff.index')->with('success', 'Staff removed succesfully!');
    }
}

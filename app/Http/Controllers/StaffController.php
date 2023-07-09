<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function index() {
        $users = User::where('role_id', '!=', 3)->orderBy('role_id', 'desc')->get();
        return view('admin.staff.index', compact('users'));
    }
}

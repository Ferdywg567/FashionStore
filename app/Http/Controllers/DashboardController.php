<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        $transactions = Transaction::with(['details', 'user', 'details.product'])->get();

        return view('admin.dashboard', compact('transactions'));
    }
}

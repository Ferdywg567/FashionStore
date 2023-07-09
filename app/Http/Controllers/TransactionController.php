<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Membership;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class TransactionController extends Controller
{
    public function checkout() {
        $carts   = Cart::whereUserId(Auth::id())->get();
        $total   = 0;
        $success = false;
        DB::beginTransaction();
        
        try {
            $transaction = Transaction::create([
                'user_id'        => Auth::id(),
                'pajak'          => 0,
                'poin_transaksi' => 0,
                'total'          => 0,
            ]);

            foreach ($carts as $key => $cart) {
                $subtotal = $cart->product->price * $cart->quantity;
                $transaction->details()->create([
                    'product_id' => $cart->product_id,
                    'quantity'   => $cart->quantity,
                    'subtotal'   => $subtotal,
                ]);

                $cart->delete();

                $total += $subtotal;
            }

            $transaction->pajak          = ($total * 11) / 100;
            $transaction->poin_transaksi = $total % 100000;
            $transaction->total          = $total;

            $transaction->save();

            if($transaction->poin_transaksi > 1) {
                $membership = Auth::user()->membership;

                $membership->jumlah_poin += $transaction->poin_transaksi;
                $membership->save();
            }

            DB::commit();
            alert()->success('Terima kasih telah berbelanja!');
            $success = true;
        } catch (\Throwable $th) {
            DB::rollBack();
            alert()->error('Maaf, sepertinya ada kesalahan.');
            $success = false;
        }

        // $transaction->load('details');

        if($success) {
            return redirect()->route('showReceipt', $transaction->id);
            // return view('user.nota', compact('transaction'));
        }

        return back();

    }

    public function showReceipt(Transaction $transaction) {
        $transaction->load(['details', 'details.product']);
        return view('user.nota', compact('transaction'));
    }

    public function index() {
        $transactions = Transaction::with(['details', 'user', 'details.product'])->get();
        return view('admin.transaction.index', compact('transactions'));
    }

    public function destroy(Transaction $transaction) {
        $transaction->delete();
        alert()->success('Transaksi Berhasil dihapus!');
        return back();
    }
}

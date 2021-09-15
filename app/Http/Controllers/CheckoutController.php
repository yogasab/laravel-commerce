<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Transaction;
use App\Models\TranscationDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function checkout(Request $request)
    {
        // Update User Data
        $user = Auth::user();
        $user->update($request->except('total_price'));

        // GET the current carts data 
        $code = "STORE-" . mt_rand(0000, 9999);
        $carts = Cart::with(['product', 'user'])->where('users_id', Auth::user()->id)->get();

        // Save to transaction
        $transaction = Transaction::create([
            'insurance_price' => 0,
            'shopping_price' => 0,
            'total_price' => $request->total_price,
            'users_id' => Auth::user()->id,
            'transaction_status' => "PENDING",
            'code' => $code
        ]);

        // Save to transaction_details as much as the user carts
        foreach ($carts as $cart) {
            $trd = "STORE-" . mt_rand(0000, 9999);
            TranscationDetail::create([
                'price' => $cart->product->price,
                'products_id' => $cart->product->id,
                'transactions_id' => $transaction->id,
                'shipping_status' => "PENDING",
                'resi' => 'PENDING',
                'code' => $trd
            ]);
        }
        return dd($transaction);
    }
}

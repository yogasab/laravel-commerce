<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Transaction;
use App\Models\TranscationDetail;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Midtrans\Config;
use Midtrans\Snap;

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

        // Delete the carts after check to midtrans
        Cart::with(['product', 'user'])->where('users_id', Auth::user()->id)->delete();

        // Midtrans Config
        Config::$serverKey = config('services.midtrans.serverKey');
        Config::$isProduction = config('services.midtrans.isProduction');
        Config::$isSanitized = config('services.midtrans.isSanitized');;
        Config::$is3ds = config('services.midtrans.is3ds');;

        // Array to send to midtrans
        $midtrans = [
            'transaction_details' => [
                'order_id' => $code,
                'gross_amount' => (int) $request->total_price
            ],
            'customer_details' => [
                'first_name' => Auth::user()->name,
                'email' => Auth::user()->email
            ],
            'enabled_payments' => [
                'gopay', 'shopeepay', 'indomaret',
                'bank_transfer'
            ],
            'vtweb' => []
        ];

        try {
            // Get Snap Payment Page URL
            $paymentUrl = Snap::createTransaction($midtrans)->redirect_url;
            return redirect($paymentUrl);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}

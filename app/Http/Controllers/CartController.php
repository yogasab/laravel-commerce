<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        $carts = Cart::with(['product', 'user'])->where('users_id', Auth::user()->id)->get();
        $data = [
            'carts' => $carts
        ];
        return view('pages.cart', $data);
    }

    public function delete(Request $request, $id)
    {
        $item = Cart::findOrFail($id);
        $item->delete();
        return redirect()->route('cart');
    }


    public function success()
    {
        return view('pages.success');
    }
}

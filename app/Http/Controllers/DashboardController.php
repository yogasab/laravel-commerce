<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TranscationDetail;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        // Transaction where all the users have ever bought
        $transactions = TranscationDetail::with(['transaction.user', 'product.galleries'])->whereHas('product', function ($product) {
            $product->where('users_id', Auth::user()->id);
        });
        // To sum all the user price transaction
        $revenue = $transactions->get()->reduce(function ($carry, $product) {
            return $carry + $product->price;
        });
        // To 
        $customers = User::count();
        $data = [
            'transaction_count' => $transactions->count(),
            'transaction_data' => $transactions->get(),
            'customers' => $customers,
            'revenue' => $revenue
        ];
        return view('pages.dashboard', $data);
    }
}

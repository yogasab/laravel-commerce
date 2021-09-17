<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TranscationDetail;
use Auth;

class DashboardTransactionController extends Controller
{
  public function index()
  {
    // query untuk barang yang kita jual
    $sellTransactions = TranscationDetail::with(['transaction.user', 'product.galleries'])->whereHas('product', function ($product) {
      $product->where('users_id', Auth::user()->id);
    })->get();
    $buyTransactions = TranscationDetail::with(['transaction.user', 'product.galleries'])->whereHas('transaction', function ($transaction) {
      $transaction->where('users_id', Auth::user()->id);
    })->get();
    $data = [
      'sellTransactions' => $sellTransactions,
      'buyTransactions' => $buyTransactions,
    ];
    return view('pages.dashboard-transactions', $data);
  }

  public function details($id)
  {
    $transaction = TranscationDetail::with(['transaction.user', 'product.galleries'])->findOrFail($id);
    $data = ['transactions' => $transaction];
    return view('pages.dashboard-transactions-details', $data);
  }

  public function update(Request $request, $id)
  {
    $data = $request->all();
    $currentItem = TranscationDetail::findOrFail($id);
    $currentItem->update($data);
    return redirect()->route('dashboard-transactions-details', $id);
  }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data = [
            'customers' => User::count(),
            'revenues' => Transaction::sum('total_price'),
            'transactions' => Transaction::count()
        ];
        return view('pages.admin.admin-dashboard', $data);
    }
}

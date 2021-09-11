<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardProductController extends Controller
{
    public function index()
    {
        return view('pages.dashboard-product');
    }
    public function details()
    {
        return view('pages.dashboard-details-product');
    }
    public function create()
    {
        return view('pages.dashboard-create-product');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function index(Request $request, $id)
    {
        $product = Product::with(['galleries', 'user'])->where('slug', $id)->firstOrFail();
        $data = [
            'product' => $product
        ];
        return view('pages.detail', $data);
    }
}

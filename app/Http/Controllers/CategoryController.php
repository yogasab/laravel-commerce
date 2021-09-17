<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $products = Product::with(['galleries'])->paginate(32);
        $data = [
          'categories' => $categories,
          'products' => $products
        ];
        return view('pages.category', $data);
    }

    public function detail(Request $request, $slug)
    {
        $categories = Category::all();
        $category = Category::where('slug', $slug)->firstOrFail();
        $products = Product::with(['galleries'])->where('categories_id', $category->id)->paginate(16);
        $data = [
            'categories' => $categories,
            'products' => $products,
        ];
        return view('pages.category', $data);
    }
}

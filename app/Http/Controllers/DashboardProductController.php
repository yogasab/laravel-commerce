<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\ProductGallery;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Admin\ProductRequest;

class DashboardProductController extends Controller
{
  public function index()
  {
    $products = Product::with(['user', 'galleries', 'category'])->where('users_id', Auth::user()->id)->get();
    $data = [
      'products' => $products
    ];
    return view('pages.dashboard-product', $data);
  }

  public function details(Request $request, $id)
  {
    $product = Product::with(['galleries', 'user', 'category'])->findOrFail($id);
    $categories = Category::all();
    $data = [
      'product' => $product,
      'categories' => $categories
    ];
    return view('pages.dashboard-details-product', $data);
  }

  public function create()
  {
    $categories = Category::all();
    $data = [
      'categories' => $categories
    ];
    return view('pages.dashboard-create-product', $data);
  }

  public function store(ProductRequest $request)
  {
    $data = $request->all();
    $data['slug'] = Str::slug($request->name);
    $product = Product::create($data);
    $gallery = [
      'photos' => $request->file('photo')->store('assets/product', 'public'),
      'products_id' => $product->id
    ];
    ProductGallery::create($gallery);
    return redirect()->route('dashboard-product');
  }

  public function deleteGallery(Request $request, $id)
  {
    $dataPhoto = ProductGallery::findOrFail($id);
    $dataPhoto->delete();
    return redirect()->route('dashboard-product-details', $dataPhoto->products_id);
  }

  public function update(ProductRequest $request, $id)
  {
    $data = $request->all();
    $currentProduct = Product::findOrFail($id);
    $data['slug'] = Str::slug($request->name);
    $currentProduct->update($data);
    return redirect()->route('dashboard-product');
  }

  public function uploadGallery(Request $request)
  {
    $data = $request->all();
    $data['photos'] = $request->file('photos')->store('assets/product', 'public');
    ProductGallery::create($data);
    return redirect()->route('dashboard-product-details', $request->products_id);
  }
}

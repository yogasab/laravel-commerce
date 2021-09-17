<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class DashboardSettingController extends Controller
{
  public function settings()
  {
    $user = Auth::user();
    $categories = Category::all();
    $data = [
      'user' => $user,
      'categories' => $categories,
    ];
    return view('pages.dashboard-settings', $data);
  }

  public function store()
  {
    $user = Auth::user();
    $data = [
      'user' => $user
    ];
    return view('pages.dashboard-account', $data);
  }

  public function update(Request $request, $redirect)
  {
    $data = $request->all();
    $user = Auth::user();
    $user->update($data);
    return redirect()->route($redirect);
  }
}

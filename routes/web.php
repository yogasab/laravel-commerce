<?php

use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardProductController;
use App\Http\Controllers\DashboardSettingController;
use App\Http\Controllers\DashboardTransactionController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/categories', [CategoryController::class, 'index'])->name('categories');
Route::get('/categories/{id}', [CategoryController::class, 'detail'])->name('categories-detail');
Route::get('/success', [CartController::class, 'success'])->name('success');
Route::get('/register/success', [RegisterController::class, 'registerSuccess'])->name('register-success');
Route::get('/detail/{id}', [DetailController::class, 'index'])->name('detail');
Route::get('/cart', [CartController::class, 'index'])->name('cart');

// Dashboard 
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
// Dashboard Product
Route::get('/dashboard/products', [DashboardProductController::class, 'index'])->name('dashboard-product');
Route::get('/dashboard/products/create', [DashboardProductController::class, 'create'])->name('dashboard-product-create');
Route::get('/dashboard/products/{id}', [DashboardProductController::class, 'details'])->name('dashboard-product-details');
// Dashboard Transactions
Route::get('/dashboard/transcations', [DashboardTransactionController::class, 'index'])->name('dashboard-transactions');
Route::get('/dashboard/transcations/{id}', [DashboardTransactionController::class, 'details'])->name('dashboard-transactions-details');
// Dashboard Setting
Route::get('/dashboard/settings', [DashboardSettingController::class, 'settings'])->name('dashboard-settings');
Route::get('/dashboard/account', [DashboardSettingController::class, 'store'])->name('dashboard-store');

// Admin Routes
// middleware(['auth', 'admin'])
Route::prefix('admin')->group(function () {
  Route::get('/', [AdminDashboardController::class, 'index'])->name('admin-dashboard');
  Route::resource('category', Admin\CategoryController::class);
  Route::resource('user', Admin\UserController::class);
  Route::resource('product', Admin\ProductController::class);
  Route::resource('product-gallery', Admin\ProductGalleryController::class);
});

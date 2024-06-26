<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\AdminController;

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

Route::get('/',[ HomeController::class,"index"])->name("home");
Route::get('/shop',[ ShopController::class,"index"])->name("shop");
Route::get('/detail',[ DetailController::class,"index"])->name("detail");
Route::get('/cart',[ CartController::class,"index"])->name("cart");
Route::get('/checkout',[ CheckoutController::class,"index"])->name("checkout");
Route::get('/admin',[ AdminController::class,"index"])->name("admin");
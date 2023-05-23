<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogDetailsController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductControllerr;
use App\Http\Controllers\ShopDetailsController;
use App\Http\Controllers\ShopGridController;
use App\Http\Controllers\ShoppingCartController;
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

// Route::get('/', function () {
//     return view('index');
// });



/////////////// FRONT END ROUTES /////////////
Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('blog',[BlogController::class,'index'])->name('blog');
Route::get('blog_details',[BlogDetailsController::class,'index'])->name('blog-details');
Route::get('contact',[ContactController::class,'index'])->name('contact');
Route::get('shop-details',[ShopDetailsController::class,'index'])->name('shop-details');
Route::get('shop',[ShopGridController::class,'index'])->name('shop');
Route::get('shopping-cart',[ShoppingCartController::class,'index'])->name('shopping-cart');
Route::get('checkout',[CheckoutController::class,'index'])->name('checkout');



/////////////// BACK END ROUTES /////////////

Route::get('dashboard',[Dashboard::class,'index'])->name('dashboard');

Route::get('add_product',[ProductController::class,'index'])->name('product.index');
Route::post('storeproduct',[ProductController::class,'storeProduct'])->name('product.storeproduct');

// Route::resource('product',ProductControllerr::class);



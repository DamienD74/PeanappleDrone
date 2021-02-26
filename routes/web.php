<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\ContactController;

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
Route::get('/', [HomeController::class, 'home'])->name("home");

Route::get('/catalog', [CatalogController::class, 'catalog'])->name("catalog");

Route::get('/ficheProduit', function () {
    return view('ficheProduit');
});

Route::get('/cart', [CartController::class, 'cart'])->name("cart");

Route::get('/contact', [ContactController::class, 'contact'])->name("contact");

Route::get('/register', [ContactController::class, 'register'])->name("register");

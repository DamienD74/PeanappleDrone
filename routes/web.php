<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BackofficeController;

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

Route::get('/product/{id}', [ProductsController::class, 'product'])->name("product");

Route::get('/cart', [CartController::class, 'cart'])->name("cart");

Route::get('/cart/validatecart', [CartController::class, 'add'])->name("addorder");

Route::post('/connection', [ContactController::class, 'connection'])->name("connection");

Route::get('/contact', [ContactController::class, 'contact'])->name("contact");

Route::get('/register', [ContactController::class, 'register'])->name("register");

Route::post('/registration', [ContactController::class, 'registration'])->name("registration");

Route::get('/backoffice', [BackofficeController::class, 'backoffice'])->name("backoffice");

Route::get('/backoffice/add', [BackofficeController::class, 'add'])->name("add");

Route::post('/backoffice/addAtTable', [BackofficeController::class, 'addAtTable'])->name("addAtTable");

Route::get('/backoffice/modifier/{id}', [BackofficeController::class, 'modifier'])->name("modifier");

Route::post('/backoffice/update/{id}', [BackofficeController::class, 'update'])->name("update");

Route::get('/backoffice/delete/{id}', [BackofficeController::class, 'delete'])->name("delete");


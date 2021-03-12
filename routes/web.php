<?php

use App\Http\Api\ProductController;
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

Route::get('/cart/addProduct/{id}', [CartController::class, 'addProduct'])->name("cartaddproduct");

Route::get('/cart/deleteProduct/{id}', [CartController::class, 'delete'])->name("cartdeleteproduct");

Route::post('/connection', [ContactController::class, 'connection'])->name("connection");

Route::get('/contact', [ContactController::class, 'contact'])->name("contact");

Route::get('/register', [ContactController::class, 'register'])->name("register");

Route::post('/registration', [ContactController::class, 'registration'])->name("registration");

Route::group(array('prefix' => '/backoffice'),function ()
{
    Route::get('', [BackofficeController::class, 'backoffice'])->name("backoffice");

    Route::get('/add', [BackofficeController::class, 'add'])->name("add");

    Route::post('/addAtTable', [BackofficeController::class, 'addAtTable'])->name("addAtTable");

    Route::get('/modifier/{id}', [BackofficeController::class, 'modifier'])->name("modifier");

    Route::post('/update/{id}', [BackofficeController::class, 'update'])->name("update");

    Route::get('/delete/{id}', [BackofficeController::class, 'delete'])->name("delete");
});

Route::group(array('prefix' => '/api'),function ()
{
    Route::get('/product', [ProductController::class, 'showProducts'])->name('ApiShowProducts');
    Route::get('/product/{id}', [ProductController::class, 'showProduct'])->name('ApiShowProduct');
    Route::get('/addProduct', [ProductController::class, 'addProduct'])->name('ApiAddProduct');
    Route::get('/updateProduct/{id}', [ProductController::class, 'updateProduct'])->name('ApiUpdateProduct');
    Route::get('/deleteProduct/{id}', [ProductController::class, 'deleteProduct'])->name('ApiDeleteProduct');
    Route::get('/delete/{id}', [BackofficeController::class, 'delete'])->name("delete");
    Route::get('/orderproduct{id}', [BackofficeController::class,'displayOrderProduct'])->name('displayOrderProduct');
    Route::get('/orders', [BackofficeController::class,'displayOrder'])->name('displayOrder');
});

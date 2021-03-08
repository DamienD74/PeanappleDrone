<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BackOfficeController;

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
Route::get('/product', [ProductsController::class, 'product'])->name("product");
Route::get('/cart', [CartController::class, 'cart'])->name("cart");
Route::get('/contact', [ContactController::class, 'contact'])->name("contact");
Route::get('/register', [ContactController::class, 'register'])->name("register");

//route backOffice
Route::get('/backOffice', [BackOfficeController::class, 'backOffice'])->name('backOffice');
Route::delete('/backOffice/delete/{ID}',[BackOfficeController::class, 'delete'])->name('product.delete');

//route update
Route::post('/backOffice/update/{ID}', [BackOfficeController::class, 'update'])->name('product.update');
Route::get('backOffice/formOffice/{ID}', [BackOfficeController::class, 'formOffice'])->name('product.modify');

//route create
Route::post('backOffice/add', [BackOfficeController::class, 'add'])->name('product.add');
Route::get('backOffice/formCreate', [BackOfficeController::class, 'formCreate'])->name('product.create');

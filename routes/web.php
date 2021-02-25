<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;

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
Route::get('/', function () {
    return view('home');
});
Route::get('/head', function () {
    return view('header');
});
Route::get('/catalog', [\App\Http\Controllers\CatalogController::class, 'catalogue']);

Route::get('/ficheProduit', function () {
    return view('ficheProduit');
});

Route::get('/cart', function () {
    return view('cart');});

Route::get('/contact', function () {
    return view('contact');
});



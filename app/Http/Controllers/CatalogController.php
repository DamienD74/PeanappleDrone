<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class CatalogController extends BaseController
{
    public function catalog()
    {
        $allProducts = Product::all();
        return view('catalog', ['catalogs' => $allProducts,]);
    }

    public function filter($id)
    {
        $allProducts = Category::find($id)->products;
        return view('/catalog', ['catalogs' => $allProducts]);
    }
}

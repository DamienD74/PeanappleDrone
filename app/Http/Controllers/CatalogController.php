<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class CatalogController extends BaseController
{
    public function catalog(Request $request)
    {
        if($request->query('category') == null)
        {
            $allProducts = Product::all();
        }
        else
        {
            $allProducts = Product::whereHas('category', function($product) use ($request) {
                $product->where('name', $request->query('category'));
            })
                ->get();
        }
        return view('catalog', ['catalogs' => $allProducts]);
    }
}

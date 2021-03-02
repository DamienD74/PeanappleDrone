<?php


namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class CatalogController extends BaseController
{
    public function catalog(Request $request)
    {
        $allProducts = Product::all()
        ->sortBy($request->query('sort'));

        return view('catalog', ['catalogs' => $allProducts]);
    }
}

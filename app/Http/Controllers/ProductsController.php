<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Routing\Controller as BaseController;

class ProductsController extends BaseController
{
    public function product($id)
    {
        $theProducts = Product::find($id);

        return view("product", ['product' => $theProducts]);
    }
}

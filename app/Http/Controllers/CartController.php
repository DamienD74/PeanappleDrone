<?php


namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Session;

class CartController extends BaseController
{
    public function getCartSession(Product $product)
    {
        $products = session()->get("cart");
        $products_details = [
            'id' => $product->id,
            'price' => $product->price,
            'quantity' => $product->quantity,
        ];
        $products[$product->id] = $products_details;
        session()->put("cart", $products);
        //dd(session()->all());
    }

}

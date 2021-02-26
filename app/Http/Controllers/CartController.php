<?php


namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class CartController extends BaseController
{
    public function cart()
    {
        return view('cart');
    }
}

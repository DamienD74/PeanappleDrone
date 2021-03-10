<?php


namespace App\Http\Controllers;


use App\Models\Product;
use App\Models\Order;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends BaseController
{

    public function cart()
    {
        Session::add('id1', 1);
        Session::add('quantity1', 10);
        Session::add('id2', 2);
        Session::add('quantity2', 12);
        Session::add('id3', 3);
        Session::add('quantity3', 15);

        return view('cart');
    }

    public function add(Request $request)
    {
        Order::create($request->all());
        Order
        return redirect()->route('home');

    }
   /* public function validateCart()
    {

        return redirect()->route('home');
    }*/
}

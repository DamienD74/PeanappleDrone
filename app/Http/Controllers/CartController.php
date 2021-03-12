<?php


namespace App\Http\Controllers;


use App\Models\OrdersProduct;
use App\Models\Product;
use App\Models\Order;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends BaseController
{

    public function cart()
    {

        return view('cart');
    }

    public function add(Request $request)
    {
        $order = Order::create($request->all());

        $products = Product::all();

        foreach ($products as $product)
        {
            if (Session::has('id'.$product->id)) {

                $prodRow = new OrdersProduct();
                $prodRow->product_id = $product->id;
                $prodRow->order_id = $order->id;
                $prodRow->quantity_products = Session::get('quantity' . $product->id);

                $prodRow->save();
            }
        }

        Session::flush();

        return redirect()->route('home');
    }
   /* public function validateCart()
    {

        return redirect()->route('home');
    }*/
}

<?php


namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Session;

class CartController extends BaseController
{
    /*public function cart()
    {
        $carts = Cart::all();

        $totalPrice = 0;

        foreach($carts as $product)
        {
            $totalPrice += ($product->price * $product->quantity);
        }

        return view("cart", ['cart' => $carts, 'totalPrice' => $totalPrice]);
    }*/

    public function cart()
    {
        $totalPrice = 0;

        $idCustomer = Session::get('id');

        $allProducts = Product::all();

        $products = [['product' => null, 'quantity' => null]];

        $nb = 0;

        foreach($allProducts as $product)
        {
            if (Session::has($product->id.$idCustomer.'product_id'))
            {
                $quantity = Session::get($product->id.$idCustomer.'quantity');

                $products[$nb] = ['product' => $product, 'quantity' => $quantity];
                $nb += 1;

                $totalPrice += ($product->price * $quantity);
            }
        }
        return view("cart", ['cart' => $products, 'totalPrice' => $totalPrice]);
    }

    /*public function addProduct($id)
    {
        $theProducts = Product::find($id);

        $carts = Cart::all();

        foreach ($carts as $cart)
        {
            if ($cart->product_id == $theProducts->id)
            {
                $cart = Cart::firstWhere('product_id', $theProducts->id);
                $cart->quantity += 1;
                $cart->save();
                return redirect(route('cart'));
            }
        }

        $cart = new Cart();

        $cart->name = $theProducts->name;
        $cart->image = $theProducts->image;
        $cart->camera = $theProducts->camera;
        $cart->weight = $theProducts->weight;
        $cart->flightTime = $theProducts->flightTime;
        $cart->flightSpeed = $theProducts->flightSpeed;
        $cart->price = $theProducts->price;
        $cart->product_id = $theProducts->id;
        $cart->quantity = 1;

        $cart->save();

        return redirect(route('cart'));
    }*/

    public function addProduct($id)
    {
        $idCustomer = Session::get('id');

        $theProducts = Product::find($id);

        if (Session::has($theProducts->id.$idCustomer.'product_id'))
        {
            $quantity = Session::get($theProducts->id.$idCustomer.'quantity');
        }
        else
        {
            $quantity = 0;
        }

        /*Session::put($theProducts->product_id.$idCustomer.'name', $theProducts->name);
        Session::put($theProducts->product_id.$idCustomer.'image', $theProducts->image);
        Session::put($theProducts->product_id.$idCustomer.'weight', $theProducts->weight);
        Session::put($theProducts->product_id.$idCustomer .'flightTime', $theProducts->flightTime);
        Session::put($theProducts->product_id.$idCustomer .'flightSpeed', $theProducts->flightSpeed);
        Session::put($theProducts->product_id.$idCustomer .'price', $theProducts->price);*/


        Session::put($theProducts->id.$idCustomer.'product_id', $theProducts->id);
        Session::put($theProducts->id.$idCustomer.'quantity', $quantity += 1);

        return redirect(route('cart'));
    }

    /*public function delete($id)
    {
        $product = Cart::find($id);

        $product->delete();

        return redirect(route('cart'));
    }*/

    public function delete($id)
    {
        $idCustomer = Session::get('id');

        Session::forget($id.$idCustomer.'product_id');
        Session::forget($id.$idCustomer.'quantity');

        return redirect(route('cart'));
    }
}

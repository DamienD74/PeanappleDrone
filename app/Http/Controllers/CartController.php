<?php


namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Session;

class CartController extends BaseController
{
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

        Session::put($theProducts->id.$idCustomer.'product_id', $theProducts->id);
        Session::put($theProducts->id.$idCustomer.'quantity', $quantity += 1);

        return redirect(route('cart'));
    }

    public function delete($id)
    {
        $idCustomer = Session::get('id');

        Session::forget($id.$idCustomer.'product_id');
        Session::forget($id.$idCustomer.'quantity');

        return redirect(route('cart'));
    }
}

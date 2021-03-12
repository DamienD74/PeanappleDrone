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

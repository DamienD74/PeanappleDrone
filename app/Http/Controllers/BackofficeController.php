<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Order;
use App\Models\Ordersproduct;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class backofficeController extends BaseController
{
    public function backoffice()
    {
        $allProducts = Product::all();

        return view('backoffice', ['products' => $allProducts]);
    }

    public function modifier($id)
    {
        $theProducts = Product::find($id);

        return view("modifier", ['product' => $theProducts]);
    }

    public function update($id, Request $request)
    {
        $product = Product::find($id);

        $product->name = $request->input('name');
        $product->camera = $request->input('camera');
        $product->weight = $request->input('weight');
        $product->flightTime = $request->input('flightTime');
        $product->flightSpeed = $request->input('flightSpeed');
        $product->price = $request->input('price');
        $product->description = $request->input('description');
        $product->image = $request->input('image');
        $product->category_id = $request->input('categorie');

        $product->save();

        return redirect(route('backoffice'));
    }

    public function add()
    {
        $allProducts = Product::all();

        return view('add', ['product' => $allProducts]);
    }

    public function addAtTable(Request $request)
    {
        $product = new Product();

        $product->name = $request->input('name');
        $product->camera = $request->input('camera');
        $product->weight = $request->input('weight');
        $product->flightTime = $request->input('flightTime');
        $product->flightSpeed = $request->input('flightSpeed');
        $product->price = $request->input('price');
        $product->description = $request->input('description');
        $product->image = $request->input('image');
        $product->category_id = $request->input('categorie');

        $product->save();

        return redirect(route('backoffice'));
    }

    public function delete($id)
    {
        $products = Product::find($id);

        $products->delete();

        return redirect(route('backoffice'));
    }

    public function displayOrder()
    {
        $orders = Order::all();
        return view('orderlist', ['orders' => $orders]);
    }

    public function displayOrderProducts()
    {
        $listorders = Ordersproduct::find('order_id');

        return view('orderproductslist', ['listorders' => $listorders]);
    }
}

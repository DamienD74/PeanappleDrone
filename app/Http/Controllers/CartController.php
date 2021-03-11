<?php


namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Session;

class CartController extends BaseController
{
    public function addSession(Request $request) {

        if (session()->has('id'.$request->input('id'))) {
//            $quantity = session('quantity'.$request->input('id'));
//            $quantity += 1;
//            Session::put('quantity'.$request->input('id'), $quantity);
           // Problème de calcul (mié au put ?)
        }
        else
        {
            Session::push('id'.$request->input('id'),$request->input('id'));
            Session::push('quantity'.$request->input('id'), 1);
        }

        dd(session('quantity'.$request->input('id')));
  return redirect(route('cart'));
    }

    public function cart()
    {
        return view('cart');
    }
}

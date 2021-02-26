<?php


namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class ProductsController extends BaseController
{
    public function product()
    {
        return view('product');
    }
}

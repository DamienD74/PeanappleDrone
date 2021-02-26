<?php


namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class CatalogController extends BaseController
{
    public function catalog()
    {
        return view('catalog');
    }
}

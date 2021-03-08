<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class CatalogController extends BaseController
{
    public function catalog(Request $request)
    {
        //$catalogs = DB::select('select * from articles');
        //dd($catalogs);
        $catalogs = Product::all()
                    ->sortBy($request->query('drone'));
        return view('catalog', ['catalogs' => $catalogs]);

    }
}

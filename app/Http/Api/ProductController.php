<?php

namespace App\Http\Api;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Routing\Controller as BaseController;

class ProductController extends BaseController
{
    public function showProducts()
    {
        return Product::all();
    }

    public function showProduct($id)
    {
        $product = ['product' => Product::find($id),
            'category' => Category::find(Product::find($id)->category_id)];
        return $product;
    }

    public function addProduct()
    {
        $product = new Product();

        $product->name = 'droneTest';
        $product->camera = 'cameraTest';
        $product->weight = 'poidTest';
        $product->flightTime = 'tempdeVolTest';
        $product->flightSpeed = 'vitesseTest';
        $product->price = 12;
        $product->description = 'descriptionTest';
        $product->image = 'imagesTest';
        $product->category_id = 2;

        $product->save();

        return $product;
    }

    public function updateProduct($id)
    {
        $product = Product::find($id);

        $product->name = 'droneModifié';
        $product->camera = 'cameraModifié';
        $product->weight = 'poidModifié';
        $product->flightTime = 'tempsdevolModifié';
        $product->flightSpeed = 'vitesseModifié';
        $product->price = 55;
        $product->description = 'descriptionModifié';
        $product->image = 'imageModifié';
        $product->category_id = 1;

        $product->save();

        return $product;
    }

    public function deleteProduct($id)
    {
        $product = Product::find($id);

        $product->delete();

        return $product.' est Supprimer';
    }
}

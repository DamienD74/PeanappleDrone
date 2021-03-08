<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Product;

class BackOfficeController extends BaseController
{
    public function backOffice(){

        $admins = Product::all();
        return view('backOffice', ['admins' => $admins]);

    }

    public function formOffice(Product $ID)
    {

        return view('formOffice',['ID' => $ID]);
    }

    public function formCreate()
    {
        return view('formCreate');
    }

    public function add(Request $request)
    {
        $admin= new Product();
        $admin->Name = $request->input('Name');
        $admin->Price = $request->input('Price');
        $admin->save();
        return redirect('/backOffice');
    }

    public function delete(Product $ID)
    {
        $ID->delete();
        return redirect('/backOffice');
    }

    public function update(Request $request , Product $ID)
    {
        $ID->Name = $request->input('Name');
        $ID->Price = $request->input('Price');
        $ID->save();
        return redirect('/backOffice');

    }
}

<?php


namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\UserAdmin;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Session;

class ContactController extends BaseController
{
    public function connection(Request $request)
    {

    }

    public function registration(Request $request)
    {

    }

    public function contact()
    {
        return view('contact');
    }

    public function register()
    {
        return view('register');
    }
}

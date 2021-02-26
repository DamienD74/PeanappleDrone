<?php


namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class ContactController extends BaseController
{
    public function contact()
    {
        return view('contact');
    }

    public function register()
    {
        return view('register');
    }
}

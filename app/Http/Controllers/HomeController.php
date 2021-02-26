<?php


namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class HomeController extends BaseController {
    function home(): string
    {
        return view('home');
    }
}

}

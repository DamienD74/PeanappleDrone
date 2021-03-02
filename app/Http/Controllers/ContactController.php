<?php


namespace App\Http\Controllers;

use App\Models\UserAdmin;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class ContactController extends BaseController
{
    public function connection(Request $request)
    {
        $allUsers = UserAdmin::all();

        foreach ($allUsers as $user)
        {
            if ($user->username == $request->input('userName') && $user->mdp == $request->input('mdp'))
            {
                return redirect(route('backoffice'));
            }
        }
        return redirect(route('home'));
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

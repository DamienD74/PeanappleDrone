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
        $allCustomers = Customer::all();

        foreach ($allUsers as $user)
        {
            if ($user->name == $request->input('userName') && $user->mdp == $request->input('mdp'))
            {
                return redirect(route('backoffice'));
            }
        }

        foreach ($allCustomers as $customer)
        {
            if ($customer->username == $request->input('userName') && $customer->mdp == $request->input('mdp'))
            {
                Session::put('id', $customer->id);

                return redirect(route('home'));
            }
        }
        return redirect(route('contact'));
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

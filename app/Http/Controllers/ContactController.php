<?php


namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Session;

class ContactController extends BaseController
{
    public function connection(Request $request)
    {
        $allUsers = Admin::all();

        $allCustomers = Customer::all();

        foreach ($allUsers as $user)
        {
            if ($user->username == $request->input('userName') && $user->mdp == $request->input('mdp'))
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
        $allCustomer = Customer::all();

        foreach ($allCustomer as $custom)
        {
            if($custom->username == $request->input('username') || $custom->email == $request->input('email'))
            {
                return redirect(route('register'));
            }
        }

        $allCustomer = new Customer();

        $allCustomer->firstname = $request->input('firstname');
        $allCustomer->name = $request->input('name');
        $allCustomer->email = $request->input('email');
        $allCustomer->username = $request->input('username');
        $allCustomer->mdp = $request->input('mdp');

        $allCustomer->save();

        Session::put('id', $allCustomer->id);

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

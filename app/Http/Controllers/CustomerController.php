<?php

namespace App\Http\Controllers;

use App\Product;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function getProfile()
    {
        $user = Auth::user();
        $products = DB::table('product_user')->where('user_id', '=', $user->id)->get();
        return view('customers.profile', ['user' => $user,'products' => $products]);
    }

    public function getApi()
    {
        $customers = User::all();

        $x = [];
        foreach ($customers as $customer)
        {
            if ( count($customer->products) > 0)
            {
                array_push($x, $customer);
            }
        }

        return response()->json(['data' => $x]);
    }
}
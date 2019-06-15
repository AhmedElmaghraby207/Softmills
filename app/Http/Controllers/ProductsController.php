<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductsController extends Controller
{
    public function getProducts()
    {
        $products = Product::all();
        return view('products.index', ['products' => $products]);
    }

    public function buyProduct(Request $request, $id)
    {
        $product = Product::find($id);
        $user = Auth::user();
        $user->products()->attach($product);
//        Session::flash('success', 'Product purchased successfully!');
        Session::flash('message', 'Product has been purchased successfully!');
        Session::flash('alert-class', 'alert-success');

        $notification = array(
            'message' => 'Product purchased successfully!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function getTopProducts()
    {
        $topProducts = DB::table("product_user")
            ->select(DB::raw("COUNT(product_id) count, product_id"))
            ->groupBy("product_id")
            ->havingRaw("COUNT(product_id) >= 1")
            ->orderBy("count", "desc")
            ->take(10)->get();

        return view('products.topProducts', ['topProducts' => $topProducts]);
    }


}

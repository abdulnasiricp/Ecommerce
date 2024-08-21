<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function index()
    {
        $data = Product::all();

        return view("product", ["products" => $data]);
    }
    function detail($id)
    {
        $data = Product::find($id);
        return view("detail", ["product" => $data]);
    }

    function search(Request $request)
    {
         $data = Product::where("name", "LIKE", "%" . $request->input('query') . "%")->get();
         return view("search", ["products"=> $data]);
    }

    function addToCart(Request $req)
    {
       
        if ($req->session()->has("user")) {
           $cart= new Cart;
          
           $cart->user_id=$req->session()->get("user")["id"];
           $cart->products_id=$req->products_id;
           $cart->save();
           return redirect("/");

        }
        else{
            return redirect('/login');
        }
    }

   static function cartItem()
    {
        $userId=session('user')['id'];
        return Cart::where('user_id',$userId)->count();
    }
}

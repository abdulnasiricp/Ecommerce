<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{




    function addProduct(Request $req)
    {
        $product = new Product;
        // Assign form values to the product object
        $product->name = $req->name;
        $product->category = $req->category;
        $product->price = $req->price;
        $product->description = $req->description;

        // Handle the file upload
        if ($req->hasFile('gallery')) {
            $file = $req->file('gallery');
            // Generate a unique file name
            $filename = time() . '_' . $file->getClientOriginalName();
            // Store the file in the public/images directory
            $filePath = $file->storeAs('public/images', $filename);
            // Store the public path in the database (remove 'public/' from the path)
            $product->gallery = str_replace('public/', 'storage/', $filePath);
        }
        $product->save();
        return redirect('categories');
    }

    //edit Produt
    // function editProduct(Request $req)
    // {
    //     $product = Product::find($req->id);

    //     $product->name = $req->name;
    //     $product->category = $req->category;
    //     $product->price = $req->price;
    //     $product->description = $req->description;
    //     if ($product->save()) {
    //         return [
    //             "Result" => "product Edited Successfully",
    //         ];
    //     } else {
    //         return [
    //             "Result" => "Opration Failled",
    //         ];
    //     }
    // }

    public function editProduct(Request $request, $id)
{
    $category = Product::find($id);

    $category->name = $request->input('name');
    $category->price = $request->input('price');
    $category->description = $request->input('description');
    // Add other fields if necessary

    $category->save();

    return redirect('/categories')->with('success', 'Category updated successfully.');
}

    function index()
    {
        $data = Product::all();

        return view("product", ["products" => $data]);
    }
    function Adminindex()
    {
        $data = Product::all();

        return view("Dashboard.categories", ["products" => $data]);
    }
    function detail($id)
    {
        $data = Product::find($id);
        return view("detail", ["product" => $data]);
    }

    function CartDetail($id)
    {
        $data = Product::find($id);
        return view("cartdetail", ["product" => $data]);
    }

    function search(Request $request)
    {
        $data = Product::where("name", "LIKE", "%" . $request->input('query') . "%")->get();
        return view("search", ["products" => $data]);
    }

    function addToCart(Request $req)
    {

        if ($req->session()->has("user")) {
            $cart = new Cart;

            $cart->user_id = $req->session()->get("user")["id"];
            $cart->products_id = $req->products_id;
            $cart->save();
            return redirect("/");

        } else {
            return redirect('/login');
        }
    }


    static function cartItem()
    {
        // Check if the session has 'user' before accessing it
        if (session()->has('user')) {
            $userId = session('user')['id'];
            return Cart::where('user_id', $userId)->count();
        }

        return 0; // Return 0 if the user is not logged in
    }



    function cartList()
    {
        $userId = Session::get('user')['id'];

        $products = DB::table('cart')
            ->join('products', 'cart.products_id', '=', 'products.id')
            ->where('cart.user_id', $userId)
            ->select('products.*', 'cart.id as cart_id')
            ->get();

        return view('cartlist', ['items' => $products]);
    }


    function removeCart($id)
    {
        Cart::destroy($id);
        return redirect('cartlist');
    }

    function ordernow()
    {
        $userId = Session::get('user')['id'];

        $totle = DB::table('cart')
            ->join('products', 'cart.products_id', '=', 'products.id')
            ->where('cart.user_id', $userId)
            ->sum('products.price');

        return view('ordernow', ['totalprice' => $totle]);
    }

    function orderPlace(Request $req)
    {
        $userId = Session::get('user')['id'];
        $allCart = Cart::where('user_id', $userId)->get();
        foreach ($allCart as $cart) {
            $order = new Order();
            $order->product_id = $cart->products_id;
            $order->user_id = $cart->user_id;
            $order->status = "pending";
            $order->Payment_method = $req->payment;
            $order->payment_status = "pending";
            $order->address = $req->address;
            $order->save();
            Cart::where('user_id', $userId)->delete();
        }
        return redirect('/');
    }

    function myOrders()
    {
        $userId = Session::get('user')['id'];

        $orders = DB::table('orders')
            ->join('products', 'orders.product_id', '=', 'products.id')
            ->where('orders.user_id', $userId)
            ->get();

        return view('myorders', ['orders' => $orders]);
    }
}

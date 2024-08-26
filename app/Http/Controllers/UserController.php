<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

   // user or customer login and register
    function login(Request $req)
    {
        $user = User::where(["email" => $req->email, "role" => "user"])->first();
        // $user = User::where(["email" => $req->email])->first();

        if (!$user || !Hash::check($req->password, $user->password)) {
            return "Username or password is not matched";
        } else {
            $req->session()->put("user", $user);
            return redirect("/");
        }
    }

    function register(Request $req)
    {
        $user = new User;
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);
        $user->role='user';
        $user->save();
        return redirect("/userlogin");

    }



}

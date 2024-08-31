<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Hash;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view("Dashboard.index");
    }
    
    public function categories()
    {
        return view('Dashboard.categories');
    }
    public function subcategories()
    {
        return view('Dashboard.subcategories');
    }
    public function service_list()
    {
        return view('Dashboard.service-list');
    }
    public function total_report()
    {
        return view('Dashboard.total-report');
    }
    public function subscriptions()
    {
        return view('Dashboard.subscriptions');
    }
    public function settings()
    {
        return view('Dashboard.settings');
    }
    public function admin_login()
    {
        return view('Dashboard.login');
    }
    public function admin_register()
    {
        return view('Dashboard.register');
    }
    public function forgot_password()
    {
        return view('Dashboard.forgot-password');
    }
    public function error_404()
    {
        return view('Dashboard.error-404');
    }
    public function blank_page()
    {
        return view('Dashboard.blank-page');
    }
    public function components()
    {
        return view('Dashboard.components');
    }
    public function form_basic_inputs()
    {
        return view('Dashboard.form-basic-inputs');
    }
    public function form_vertical()
    {
        return view('Dashboard.form-vertical');
    }
    public function form_horizontal()
    {
        return view('Dashboard.form-horizontal');
    }
    public function tables_basic()
    {
        return view('Dashboard.tables-basic');
    }
    public function add_category()
    {
        return view('Dashboard.add-category');
    }
    public function edit_category()
    {
        return view('Dashboard.edit-category');
    }

 
    public function service_details()
    {
        return view('Dashboard.service-details');
    }
    public function pending_report()
    {
        return view('Dashboard.pending-report');
    }
   
    public function emailsettings()
    {
        return view('Dashboard.emailsettings');
    }
    public function edit_subscription()
    {
        return view('Dashboard.edit-subscription');
    }
    public function inprogress_report()
    {
        return view('Dashboard.inprogress-report');
    }
    public function reject_report()
    {
        return view('Dashboard.reject-report');
    }
    public function cancel_report()
    {
        return view('Dashboard.cancel-report');
    }
    public function complete_report()
    {
        return view('Dashboard.complete-report');
    }
    



    // admin login and register  

    function admin_login_check(Request $req)
    {
        $user = User::where(["email" => $req->email, "role" => "admin"])->first();
        // $user = User::where(["email" => $req->email])->first();

        if (!$user || !Hash::check($req->password, $user->password)) {
            return "Username or password is not matched";
        } else {
            $req->session()->put("user", $user);
            return redirect("index");
        }
    }

    function admin_register_check(Request $req)
    {
        
        $user = new User;
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);
        $user->role = 'admin';
        $user->save();
        return redirect("/login");

    }
}

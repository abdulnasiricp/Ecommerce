<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Admin Dashboard Routes
Route::post("/admin-login", [AdminController::class,"admin_login_check"]);
Route::post("/admin-register", [AdminController::class,"admin_register_check"]);

Route::get("/index", [AdminController::class,"index"]);
Route::get("/categories", [AdminController::class,"categories"]);
Route::post("/addproduct", [ProductController::class,"addProduct"]);
Route::get("/subcategories", [AdminController::class,"subcategories"]);
Route::get("/service-list", [AdminController::class,"service_list"]);
Route::get("/total-report", [AdminController::class,"total_report"]);
Route::get("/subscriptions", [AdminController::class,"subscriptions"]);
Route::get("/login", [AdminController::class,"admin_login"]);
Route::get("/register", [AdminController::class,"admin_register"]);
Route::get("/settings", [AdminController::class,"settings"]);
Route::get("/forgot-password", [AdminController::class,"forgot_password"]);
Route::get("/error-404", [AdminController::class,"error_404"]);
Route::get("/blank-page", [AdminController::class,"blank_page"]);
Route::get("/components", [AdminController::class,"components"]);
Route::get("/form-basic-inputs", [AdminController::class,"form_basic_inputs"]);
Route::get("/form-vertical", [AdminController::class,"form_vertical"]);
Route::get("/form-horizontal", [AdminController::class,"form_horizontal"]);
Route::get("/tables-basic", [AdminController::class,"tables_basic"]);
Route::get("/add-category", [AdminController::class,"add_category"]);
Route::get("/edit-category", [AdminController::class,"edit_category"]);
Route::get("/service-details", [AdminController::class,"service_details"]);
Route::get("/emailsettings", [AdminController::class,"emailsettings"]);
Route::get("/edit-subscription", [AdminController::class,"edit_subscription"]);
Route::get("/inprogress-report", [AdminController::class,"inprogress-report"]);
Route::get("/complete-report", [AdminController::class,"complete_report"]);
Route::get("/reject-report", [AdminController::class,"reject_report"]);
Route::get("/cancel-report", [AdminController::class,"cancel_report"]);
Route::get("/emailsettings", [AdminController::class,"emailsettings"]);

Route::get('/admin_logout', function () {
    Session::forget('user');
    return redirect('login');
});




// Route::view('admin-notification','admin-notification');
// Route::view('add-subscription','add-subscription');
// Route::view('sms-settings','sms-settings');
// Route::view('stripe_payment_gateway','stripe_payment_gateway');





// User Routes
Route::get('/userlogin', function () {
    return view('userlogin');
});
Route::get('userregister', function () {
    return view('userregister');
});

Route::get('/logout', function () {
    Session::forget('user');
    return redirect('userlogin');
});



Route::post('/userlogin',[UserController::class,'login']);

Route::post('/userregister',[UserController::class,'register']);



Route::get('/',[ProductController::class,'index']);

Route::get('/detail/{id}',[ProductController::class,'detail']);

Route::get('/cartdetail/{id}',[ProductController::class,'CartDetail']);

Route::get('search',[ProductController::class,'search']);

Route::post('add_to_cart',[ProductController::class,'addToCart']);

Route::get('cartlist',[ProductController::class,'cartList']);

Route::get('removecart/{id}',[ProductController::class,'removeCart']);

Route::get('ordernow',[ProductController::class,'orderNow']);

Route::post('orderplace',[ProductController::class,'orderPlace']);

Route::get('myorders',[ProductController::class,'myOrders']);


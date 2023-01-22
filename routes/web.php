<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get("orders", function () {
    // dd(Str::prefix(1234567890));
    return Str::orderId(1234567890);
});

Route::get("errors", function () {
    return Response::errorJSON("KESALAHAN DI DATABASE");
});

// view composer => app/providers/appserviceprovider.php
Route::get("channels", function () {
    // $datas = ["dakasakti", "kaila"];
    // return view('channel.index', compact('datas'));
    return view('channel.index');
});

Route::get("channels/create", function () {
    // $datas = ["dakasakti", "kaila"];
    // return view('channel.create', compact('datas'));
    return view('channel.create');
});
// end

// repositories pattern
Route::resource('customers', CustomerController::class);

// middleware
Route::get("roles", function (Request $request) {
    if ($request->role === "admin") {
        return redirect('/admin?role=admin');
    }

    if ($request->role === "member") {
        return redirect('/member?role=member');
    }

    return "Query Param is required. {role=admin or role=member}";
});

Route::middleware("roles:member")->get("member", function () {
    return "Member Page";
});

Route::middleware("roles:admin")->get("admin", function () {
    return "Admin Page";
});

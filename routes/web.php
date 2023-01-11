<?php

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
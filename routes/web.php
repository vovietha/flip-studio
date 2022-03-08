<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;

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
// CUSTOMER ROUTE
Route::get('/', function () {
    return view('user.home');
});
Route::get('/login', function () {
    return view('user.login');
});
Route::get('/cart', function () {
    return view('user.cart');
});
Route::get('/collections', function () {
    return view('user.collections');
});
Route::get('/contact', function () {
    return view('user.contact');
});
Route::get('/returns-exchange', function () {
    return view('user.returns-exchange');
});
Route::get('/about', function () {
    return view('user.about');
});
Route::get('/shipping', function () {
    return view('user.shipping');
});
Route::get('/shop', function () {
    return view('user.shop');
});
Route::get('/all', function () {
    return view('user.layouts.list-item');
});
//LOGGED IN VIEWS 
Route::get('/profile', function () {
    return view('user.profile');
});
Route::get('/ordered-history', function () {
    return view('user.orderedHistory');
});
// 
Route::post('/register', [UserController::class,"register"])->name("register");
Route::post('/login', [LoginController::class,"authenticate"])->name("login");
Route::get('/logout', [LoginController::class,"logout"])->name("logout");
// 
// ADMIN ROUTE
Route::get('/admin', function() {
    return view('admin.login');
});
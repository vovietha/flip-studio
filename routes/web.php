<?php

use App\Models\Catalog;
use App\Models\Category;
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
    return view('user.collectionList');
});
Route::get('/collections/collection', function () {
    return view('user.collectionItem');
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
Route::get('/product', function () {
    return view('user.detailProduct');
});
//LOGGED IN VIEWS 
Route::get('/profile', function () {
    return view('user.profile');
})->middleware('auth');
Route::get('/ordered-history', function () {
    return view('user.orderedHistory');
})->middleware('auth');
// 
Route::post('/register', [UserController::class,"register"])->name("register");
Route::post('/login', [LoginController::class,"authenticate"])->name("login");
Route::get('/logout', [LoginController::class,"logout"])->name("logout");
// 
// ADMIN ROUTE
Route::get('/admin/login', function() {
    return view('admin.auth.login');
});
Route::get('/admin/dashboard', function() {
    return view('admin.dashboard');
});
Route::get('/admin/products', function() {
    return view('admin.product');
});
Route::get('/admin/categories', function() {

    $catalogs = Catalog::root()->get();

    return view('admin.category', [
        'catalogs' => $catalogs
    ]);
});
Route::get('/admin/parameter-sets', function() {
    return view('admin.parameterSet');
});
Route::get('/admin/collections', function() {
    return view('admin.collection');
});
Route::get('/admin/accounts', function() {
    return view('admin.account');
});
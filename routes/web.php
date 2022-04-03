<?php

use App\Models\Catalog;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\Admin\LoginController as AdminLoginController;

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
})->name('home');
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
//SHOP
Route::get('shop/{slug}', [FrontendController::class,"viewcategory"])->name('shop');
// Route::get('product/{slug}', [FrontendController::class,"viewproducts"])->name('products');
// DETAIL PRODUCT
Route::get('shop/{cate_slug}/{prod_title}', [FrontendController::class,"viewproducts"]);



Route::get('/all', function () {
    return view('user.layouts.list-item');
});
// Route::get('/product', function () {
//     return view('user.detailProduct');
// });

Route::post('add-to-cart',[CartController::class,'addProduct']);
Route::post('delete-cart-item',[CartController::class,'deleteproduct']);

Route::middleware(['auth'])->group(function(){
    Route::get('cart',[CartController::class,'viewcart']);
});



//LOGGED IN VIEWS 
Route::get('/profile', function () {
    return view('user.profile');
})->middleware('auth');
Route::get('/ordered-history', function () {
    return view('user.orderedHistory');
})->middleware('auth');
//CUSTOMER LOGIN
Route::post('/register', [UserController::class,"register"])->name("register");
Route::post('/login', [LoginController::class,"authenticate"])->name("login");
Route::get('/logout', [LoginController::class,"logout"])->name("logout");

// ADMIN ROUTE
Route::prefix('admin')->name('admin.')->group(function() {
    Route::resources([
        'catalogs' => CatalogController::class,
        'products' => ProductController::class,
        'accounts' => AccountController::class,
    ]);
    Route::get('/', function() {
        return view('admin.auth.login');
    })->name('adminLogin');
    Route::post('/', [AdminLoginController::class,'authenticate'])->name('adminLogin');
    Route::get('/admin/logout', [AdminLoginController::class,"logout"])->name("logout");

    Route::get('/dashboard', function() {
        return view('admin.dashboard');
    })->name('dashboard')->middleware('isAdmin');
    // PARAMETER SET
    Route::get('/parameter-sets', function() {
        return view('admin.parameterSet');
    });
    Route::get('/collections', function() {
        return view('admin.collection');
    });
    // Route::get('/accounts', function() {
    //     return view('admin.account');
    // });

});
<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function index()
    {
        $old_cartItems = Cart::where('user_id', Auth::id())->get();
        foreach($old_cartItems as $cartItem)
        {
            if (!Product::where('id',$cartItem->product_id)->where('stock','>=',$cartItem->product_qty)->exists())
            {  
                $removeItem = Cart::where('user_id', Auth::id())->where('product_id',$cartItem->product_id)->first();
                $removeItem->delete();
            }
        }
        $cartItems = Cart::where('user_id', Auth::id())->get();

        return view('user.checkout', compact('cartItems'));
    }
}

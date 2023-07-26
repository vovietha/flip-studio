<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function addProduct(Request $request)
    {
        $product_id = $request->input('product_id');
        $product_qty = $request->input('product_qty');

        if (Auth::check())
        {
            $product_check = Product::where('id', $product_id)->first();

            if ($product_check)
            {
                if (Cart::where('product_id',$product_id)->where('user_id', Auth::id())->exists())
                {
                    return response()->json(['status' =>$product_check->title.' - Already added to cart']);
                }
                else 
                {
                    $cartItem = new Cart();
                    $cartItem->product_id = $product_id;
                    $cartItem->user_id = Auth::id();
                    $cartItem->product_qty = $product_qty;
                    $cartItem->save();
                    return response()->json(['status'=>$product_check->title.' - Added to cart']);
                }
            }
        }
        else 
        {
            return response()->json(['status'=>'Login to continue']);
        }
    }
    public function viewcart()
    {
        $cartItems = Cart::where('user_id', Auth::id())->get();
        return view('user.cart', compact('cartItems'));
    }
    public function deleteproduct(Request $request)
    {
        if (Auth::check()) 
        {
            $product_id = $request->input('product_id');
            
            if (Cart::where('product_id', $product_id)->where('user_id', Auth::id())->exists())
            {
                $cartItem = Cart::where('product_id', $product_id)->where('user_id', Auth::id())->first();
                $cartItem->delete();
                return response()->json(['status'=>'Product deleted successfully']);
            }
        }
        else 
        {
            return response()->json(['status'=>'Login to continue']);
        }
    }
    public function updatecart(Request $request)
    {
        $product_id = $request->input('product_id');
        $product_qty = $request->input('product_qty');

        if (Auth::check())
        {
            if (Cart::where('product_id', $product_id)->where('user_id', Auth::id())->exists())
            {
                $cart = Cart::where('product_id', $product_id)->where('user_id', Auth::id())->first();
                $cart->product_qty = $product_qty;
                $cart->update();
                return response()->json(['status'=>'Quantity updated successfully']);
            }
        }
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use App\Models\OrderItem;
use App\Models\Order;
use App\Models\User;
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
    public function placeorder(Request $request)
    {
        $order = new Order();
        $order->user_id = Auth::id();
        $order->fname = $request->input('fname');
        $order->email = $request->input('email');
        $order->phone = $request->input('phone');
        $order->address = $request->input('address');
        $order->city = $request->input('city');
        $order->state = $request->input('state');
        $order->country = $request->input('country');
        $order->pincode = $request->input('pincode');
        $order->note = $request->input('note');
        $order->tracking_number = 'FS'.rand(1111,9999);
        $order->save();

        $order->id;

        $cartItems = Cart::where('user_id', Auth::id())->get();
        foreach ($cartItems as $cartItem)
        {
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $cartItem->product_id,
                'qty' => $cartItem->product_qty,
                'price' => $cartItem->products->price,
            ]);

            $product = Product::where('id', $cartItem->product_id)->first();
            $product->stock =  $product->stock - $cartItem->product_qty;
            $product->update();

        }
        if (Auth::user()->address == NULL)
        {
            $user = User::where('id', Auth::id())->first();
            $user->fname = $request->input('fname');
            $user->phone = $request->input('phone');
            $user->address = $request->input('address');
            $user->city = $request->input('city');
            $user->state = $request->input('state');
            $user->country = $request->input('country');
            $user->pincode = $request->input('pincode');

            $user->update();
        }

        $cartItems = Cart::where('user_id', Auth::id())->get();
        Cart::destroy($cartItems);


        return redirect()->back()->with('status','ORDER PLACED SUCCESSFULLY');
    }
}

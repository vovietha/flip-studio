<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::where('status', '0')->get();
        return view('admin.Orders.index',compact('orders'));
    }
    public function edit($orderId)
    {
        // Get the order by ID with related order items and user information
        $order = Order::with('orderitems.product', 'user')->findOrFail($orderId);

        // Return the view with the order details
        return view('admin.Orders.edit', compact('order'));
    }

}

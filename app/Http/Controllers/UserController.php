<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\RegisterUserRequest;

class UserController extends Controller
{
    public function register(RegisterUserRequest $request) {
        $data = $request->validated();
        $data['password'] = bcrypt($data['password']); 
        User::create($data);
        $request->session()->flash('status', 'Register successful!');
        return redirect()->back();
    }

    public function index()
    {
        $orders = Order::where('user_id', Auth::id())->get();
        return view('user.orderedHistory', compact('orders'));
    }
    public function profile()
    {
        $users = User::where('id', Auth::id())->get();
        return view('user.profile', compact('users'));
    }
    public function dashboard()
    {
        $users = User::where('id', Auth::id())->first();
        return view('admin.dashboard', compact('users'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
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
}

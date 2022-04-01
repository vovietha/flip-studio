<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
 
class LoginController extends Controller
{
    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        $credentials['role'] = 'customer';
        
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $user = Auth::user();
            return redirect()->route('home');
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
    // protected function credentials(Request $request)
    // {
    //     $credentials = $request->only('email', 'password');
    //     $credentials['role'] = 'admin';

    //     if (Auth::attempt($credentials)) {
    //         $request->session()->regenerate();

    //         return redirect()->intended('/dashboard');
    //     }
    // }

    // protected function authenticated()
    // {
    //     if(Auth::users()->role == 'admin') //1 = Admin Login
    //     {
    //         return redirect('dashboard')->with('status','Welcome to your dashboard');
    //     }
    //     elseif(Auth::users()->role == 'customer') // Normal or Default User Login
    //     {
    //         return redirect('/')->with('status','Logged in successfully');
    //     }
    // }
    
    public function logout(Request $request)
    {
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect()->back();
    }
}

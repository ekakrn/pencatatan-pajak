<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    const NOT_ALLOWED = "are not allowed to access";
    
    public function loginAuth(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
    
        $credentials = $request->only('username', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('/')
                        ->withSuccess('Signed in');
        }
   
        return redirect('login')->withSuccess('Login details are not valid');
    }
 
    public function signOut()
    {
        Session::flush();
        Auth::logout();
   
        return redirect('login');
    }
}

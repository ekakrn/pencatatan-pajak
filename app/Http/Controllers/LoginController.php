<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            return redirect('/pajak');
        }

        return view('login', [
            'title' => 'Pencatatan Pajak',
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index', [
            'tittle' => 'Login',
            'active' => 'login'
        ]);
    }
    public function auth(Request $request)
    {
        # code...
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('admin');
        }

       
            Session::flash('status', 'failed');
            Session::flash('message', 'login wrong');

            return redirect('/login');
         
    }

    public function logout(Request $request)
    {
        # code...
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }

}
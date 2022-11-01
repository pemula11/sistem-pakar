<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GejalaController extends Controller
{
    //
    public function index()
    {
        # code...
        return view('dashboard.gejala.index', [
            'tittle' => 'Login',
            'active' => 'login'
        ]);
    }
}

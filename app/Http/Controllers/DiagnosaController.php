<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class DiagnosaController extends Controller
{
    //

    public function index()
    {
        # code...
       
        return view('user.user', [
            "tittle" => "Dashboard",
            "active" => "dashboard",
            
        ]);
    }

    public function diagnosa(Request $request)
    {
        # code...
        $data = Kategori::all();
        return view('dashboard.user.diagnosa', [
            "tittle" => "Dashboard",
            "active" => "dashboard",
            'datakategori' => $data
        ]);
    }
    public function diagnosis(Request $request, $data)
    {
        
}

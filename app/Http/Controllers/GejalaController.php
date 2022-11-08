<?php

namespace App\Http\Controllers;

use App\Models\gejala;
use Illuminate\Http\Request;

class GejalaController extends Controller
{

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request){
            $data = gejala::where('nama_gejala', 'like', '%'.$request->search. '%')->get();
        }else{
            $data = gejala::all();
        }
        return view('dashboard.gejala.index', [
            'tittle' => 'Login',
            'active' => 'login',
            'gejalaTable' => $data,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $validatedData = $request->validate([
            'kode_gejala' => 'required|max:50|unique:gejala',
            'nama_gejala' => 'max:50|required',
            'deskripsi_gejala' => 'max:250|required',
           ]);
           gejala::create($validatedData);
           
          return redirect('/dashboard/gejala')->with('success', 'New Category Has Been Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\gejala  $gejala
     * @return \Illuminate\Http\Response
     */
    public function show(gejala $gejala)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\gejala  $gejala
     * @return \Illuminate\Http\Response
     */
    public function edit($kode_gejala)
    {
        //
       
        $kode = gejala::select()->where('kode_gejala', $kode_gejala)->get();
        
        if ($kode->count() > 0) {
            return view('dashboard.gejala.edit_gejala', [
                'data_gejala' => $kode[0],
            ]);
        }
        else{
            return redirect('/dashboard/gejala')->with('error', 'error enconunter');
        }
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\gejala  $gejala
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, gejala $gejala)
    {
        //'kode_gejala' => 'required|max:50|unique:gejala',
        $rules = [
            
            'nama_gejala' => 'max:50|required',
            'deskripsi_gejala' => 'max:250|required',
           ];
        if ($request->kode_gejala != $gejala->kode_gejala) {
            # code...
            $rules['kode_gejala'] = 'required|max:50|unique:gejala';
        }
        $validatedData = $request->validate($rules);
        gejala::where('id', $gejala->id)
            ->update($validatedData);
        return redirect('/dashboard/gejala')->with('success', 'Gejala Has Been Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\gejala  $gejala
     * @return \Illuminate\Http\Response
     */
    public function destroy(gejala $gejala)
    {
        gejala::destroy($gejala->id);

        return redirect('/dashboard/gejala')->with('success', ' Post Has Been Deleted');
    }
}

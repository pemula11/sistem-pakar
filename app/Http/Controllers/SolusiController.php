<?php

namespace App\Http\Controllers;

use App\Models\solusi;
use Illuminate\Http\Request;

class SolusiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = solusi::all();
        return view('dashboard.solusi.index', [
            'tittle' => 'Login',
            'active' => 'login',
            'solusiTable' => $data,
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
            'kode_solusi' => 'required|max:50|unique:solusi',
            'nama_solusi' => 'max:50|required',
            'deskripsi_solusi' => 'max:250|required',
           ]);
           solusi::create($validatedData);
           
          return redirect('/dashboard/solusi')->with('success', 'New Category Has Been Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\solusi  $solusi
     * @return \Illuminate\Http\Response
     */
    public function show(solusi $solusi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\solusi  $solusi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $kode = solusi::select()->where('kode_solusi', $id)->get();
        
        if ($kode->count() > 0) {
            return view('dashboard.solusi.edit_solusi', [
                'data_solusi' => $kode[0],
            ]);
        }
        else{
            return redirect('/dashboard/solusi')->with('error', 'error enconunter');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\solusi  $solusi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, solusi $solusi)
    {
        //
         //'kode_solusi' => 'required|max:50|unique:solusi',
         $rules = [
            
            'nama_solusi' => 'max:50|required',
            'deskripsi_solusi' => 'max:250|required',
           ];
        if ($request->kode_solusi != $solusi->kode_solusi) {
            # code...
            $rules['kode_solusi'] = 'required|max:50|unique:solusi';
        }
        $validatedData = $request->validate($rules);
        solusi::where('id', $solusi->id)
            ->update($validatedData);
        return redirect('/dashboard/solusi')->with('success', 'solusi Has Been Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\solusi  $solusi
     * @return \Illuminate\Http\Response
     */
    public function destroy(solusi $solusi)
    {
        //
        solusi::destroy($solusi->id);

        return redirect('/dashboard/solusi')->with('success', ' Post Has Been Deleted');
    }
}

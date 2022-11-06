<?php

namespace App\Http\Controllers;

use App\Models\kerusakan;
use Illuminate\Http\Request;

class KerusakanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = kerusakan::all();
        return view('dashboard.kerusakan.index', [
            'tittle' => 'Login',
            'active' => 'login',
            'kerusakanTable' => $data,
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
        //
        $validatedData = $request->validate([
            'kode_kerusakan' => 'required|max:50|unique:kerusakan',
            'nama_kerusakan' => 'max:50|required',
            'deskripsi_kerusakan' => 'max:250|required',
           ]);
           kerusakan::create($validatedData);
           
          return redirect('/dashboard/kerusakan')->with('success', 'New Category Has Been Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\kerusakan  $kerusakan
     * @return \Illuminate\Http\Response
     */
    public function show(kerusakan $kerusakan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kerusakan  $kerusakan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $kode = kerusakan::select()->where('kode_kerusakan', $id)->get();
        
        if ($kode->count() > 0) {
            return view('dashboard.kerusakan.edit_kerusakan', [
                'data_kerusakan' => $kode[0],
            ]);
        }
        else{
            return redirect('/dashboard/kerusakan')->with('error', 'error enconunter');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\kerusakan  $kerusakan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, kerusakan $kerusakan)
    {
        //
         //'kode_kerusakan' => 'required|max:50|unique:kerusakan',
         $rules = [
            
            'nama_kerusakan' => 'max:50|required',
            'deskripsi_kerusakan' => 'max:250|required',
           ];
        if ($request->kode_kerusakan != $kerusakan->kode_kerusakan) {
            # code...
            $rules['kode_kerusakan'] = 'required|max:50|unique:kerusakan';
        }
        $validatedData = $request->validate($rules);
        kerusakan::where('id', $kerusakan->id)
            ->update($validatedData);
        return redirect('/dashboard/kerusakan')->with('success', 'kerusakan Has Been Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kerusakan  $kerusakan
     * @return \Illuminate\Http\Response
     */
    public function destroy(kerusakan $kerusakan)
    {
        //
        kerusakan::destroy($kerusakan->id);

        return redirect('/dashboard/kerusakan')->with('success', ' Post Has Been Deleted');
    }
}

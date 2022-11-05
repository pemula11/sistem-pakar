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
    public function index()
    {
        return view('dashboard.gejala.index', [
            'tittle' => 'Login',
            'active' => 'login'
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
    public function edit(gejala $gejala)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\gejala  $gejala
     * @return \Illuminate\Http\Response
     */
    public function destroy(gejala $gejala)
    {
        //
    }
}

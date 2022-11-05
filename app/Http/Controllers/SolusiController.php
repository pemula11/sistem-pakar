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
        return view('dashboard.solusi.index', [
            "title" => "Solusi",
            "active" => "solusi"
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
    public function edit(solusi $solusi)
    {
        //
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
    }
}

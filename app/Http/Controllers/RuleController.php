<?php

namespace App\Http\Controllers;

use App\Models\Rule;
use App\Models\gejala;
use App\Models\solusi;
use App\Models\Kategori;
use App\Models\kerusakan;
use App\Models\RelasiRole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RuleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Rule::with(['kerusakan', 'solusi', 'relasi_gejala', 'kategori'])->get();
        $kerusakan = kerusakan::select('id', 'nama_kerusakan', 'kode_kerusakan')->get();
        $solusi = solusi::select('id', 'nama_solusi', 'kode_solusi')->get();
        $gejala = gejala::select('id', 'nama_gejala', 'kode_gejala')->get();
        $kategori = Kategori::select('id','kategori')->get();
       
     //   dd($data);
        return view('dashboard.rule.index', [
            'tittle' => 'Login',
            'active' => 'login',
            'ruleTable' => $data,
            'datakerusakan' => $kerusakan,
            'datasolusi' => $solusi,
            'datagejala' => $gejala,
            'datakategori' => $kategori,
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
            'kerusakan_id' => 'required',
            'solusi_id' => 'required',
            'kategori_id' => 'required',
        ]);
        Rule::create($validatedData);
        return redirect('/dashboard/rule')->with('success', 'New Rule Has Been Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rule  $rule
     * @return \Illuminate\Http\Response
     */
    public function show(Rule $rule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rule  $rule
     * @return \Illuminate\Http\Response
     */
    public function edit(Rule $rule)
    {
        //
        $kode = Rule::select()->where('id', $rule->id)->get();
        $kerusakan = kerusakan::select('id', 'nama_kerusakan', 'kode_kerusakan')->get();
        $solusi = solusi::select('id', 'nama_solusi', 'kode_solusi')->get();
        $gejala = gejala::select('id', 'nama_gejala', 'kode_gejala')->get();
        $kategori = Kategori::select('id','kategori')->get();
        
        if ($kode->count() == 1) {
            return view('dashboard.rule.edit_rule', [
                'data_rule' => $kode->first(),
                'datakerusakan' => $kerusakan,
                'datasolusi' => $solusi,
                'datagejala' => $gejala,
                'datakategori' => $kategori,
            ]);
        }
        else{
            return redirect('/dashboard/rule')->with('error', 'error enconunter');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rule  $rule
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rule $rule)
    {
        //
        $validatedData = $request->validate([
            'kerusakan_id' => 'required',
            'solusi_id' => 'required',
            'kategori_id' => 'required',
        ]);
        Rule::findOrFail($rule->id)->update($validatedData);
        
        return redirect('/dashboard/rule')->with('success', 'Rule Has Been Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rule  $rule
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rule $rule)
    {
        //
        
        $data = Rule::findOrFail($rule->id);
        Rule::destroy($data->id);
        return redirect('/dashboard/rule')->with('success', 'Rule Has Been Deleted');
    }


    public function tambah_gejala($id)
    {
        # code...
        $gejala = gejala::with('relasi_rule')->select('id', 'nama_gejala', 'kode_gejala')->
        whereNOTIn('id',function($query) use($id){
            $query->select('gejala_id')->where('rule_id', $id)->from('relasi_rules');
            })->get();
       
        //    dd($data);
        // whereNOTIn('id',function($query){
        //     $query->select('rule_id')->from('relasi_rules');
        //     })

        // whereHas('relasi_rule', function($q) use($id){
        //     $q->where('organisasi', '=', $id);
        // })
           return view('dashboard.rule.add_gejala', [
               'tittle' => 'Login',
               'active' => 'login',
               'id' => $id,
               'datagejala' => $gejala,
           ]);

    }

    public function add_gejala_query(Request $request)
    {
        # code...

        $validatedData = $request->validate([
            
            'rule_id' => 'max:10|required',
            'gejala_id' => 'required|max:10',
           ]);
           
           RelasiRole::create($validatedData);
           return redirect('/dashboard/rule')->with('success', 'New Category Has Been Added');
    }

    public function delete_gejala_query(Request $request, $data)
    {
        # code...
        $posisi    =strpos($data, '&');
       // dd($posisi);

        $koderelasi =  substr($data, 0, $posisi);
     
        $kodegejala = substr($data, $posisi+1);


        //$del = RelasiRole::where('gejala_id', $kodegejala)->where('rule_id', $koderelasi)->first()->delete();
        $dels =  DB::table('relasi_rules')->where('gejala_id', $kodegejala)->where('rule_id', $koderelasi)->delete();
        return redirect('/dashboard/rule')->with('success', 'Delete Has Been delete');
    }

}

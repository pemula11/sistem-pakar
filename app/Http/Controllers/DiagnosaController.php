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
        $arr = array();
        $notpick = array();
        $idx = [
            'arr' => 0,
            'data' => 0,
            'kategori' => '.',
        ];

        if ($request->datasesi){
            $getsesi = json_decode($request->datasesi, true);
            $arr = $getsesi['pilihya'];
            $notpick = $getsesi['pilihtidak'];
            $idx = [
                'arr' => $getsesi['idxarr'],
                'data' => $getsesi['idxdata'],
                'kategori' => ($request->kategori),
            ];
    
            }

        # code...
       

        // $kategori = Rule::with(['kategori', 'relasi_gejala'])->whereHas('kategori', function($q) use($data){
        //     $q->where('kategori', '=', $data);
        // })->whereHas('relasi_gejala', function($q) use($data){
            
            // $q->whereNOT(function ($query) {
            //     $query->whereIn('gejala_id', [1,2]);
            // });
            
        // });

         $dt =($request->kategori);
        if ($request->pilihan){
            if ($request->pilihan == "ya"){
                $idx['data'] += 1;
                array_push($arr, $request->kode);
            }
            elseif  (($request->pilihan == "tidak")){
                array_push($notpick, $request->kode);
            }
        }
        // relasi awal antara kategori dengan rule
        $kategori = Rule::with(['kategori', 
        'relasi_gejala' ])->whereHas('kategori', function($q) use($dt){
            $q->where('kategori', '=', $dt);
        });

        $kategori = $kategori->whereNot(function ($q) use($notpick) {
            $q->whereHas('relasi_gejala', function($q) use($notpick) {
                $q->whereIn('gejala_id', $notpick );
            });
        });

        foreach($arr as $it){
            $kategori = $kategori->whereHas('relasi_gejala', function($q) use($it){
                $q->where('gejala_id', $it);
            });
        }

        
        $back = $kategori;
        $query = $kategori;
        $kategori = $kategori->get();
        $total = $kategori->count();
        
        if ($total > 1){
           
            $totalarr = $kategori[$idx['arr']]->relasi_gejala->count();
            if ($totalarr <= $idx['data']){
                $idx['data'] = 0;
                $idx['arr'] += 1;
                
            }
           
            $pertanyaan =  ($kategori[$idx['arr']]->relasi_gejala->get($idx['data']));
            
        }
        else if ($total==1){
           
           $back = $back->with(['relasi_gejala' => function($q) use($arr){
                $q->whereNotIn('gejala_id', $arr);
            }
        ])->get();  
                
           $back = ($back->first()->relasi_gejala);
           $totalrelasi = $back->count();
           if ($totalrelasi > 0){
            $pertanyaan = $back->first();
           }
           else{
            #data ditemukan
                $query->with(['kerusakan', 'solusi', 'relasi_gejala'])->get();
               return view('dashboard.user.hasildiagnosa', [
                "tittle" => "Hasil Diagnosa",
                "active" => "dashboard",
                'kesimpulan' => 1,
                'dataHasil' => $query->first(),
               ]);
           }
        }
        else{
            return view('dashboard.user.hasildiagnosa', [
                "tittle" => "Hasil Diagnosa",
                "active" => "dashboard",
                'kesimpulan' => 0,
               ]);
            
           
        }

    //    foreach($kategori as $item){
    //             echo ($item->relasi_gejala);
    //             echo "<br>";
    //         }  
    //     echo "<br>";

        $datasesi = [
            'idxdata' => $idx['data'],
            'idxarr' => $idx['arr'],
            'kategori' => $request->kategori,
            'pilihya' => $arr,
            'pilihtidak' => $notpick
        ];
  
     

      return view('dashboard.user.listdiagnosa', [
        "tittle" => "Dashboard",
        "active" => "dashboard",
        'kategori' => $request->kategori,
        'datatanya' => $pertanyaan,
        'datasesi' => $datasesi,
    ]);
    }
}

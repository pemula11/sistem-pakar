@extends('dashboard.layouts.main')
@section('title', 'rule')
@section('content')
    

<div class="mx-auto">
    
    <div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Daftar rule</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
                    Tambah Rule
                  </button>

                  <div class="row">
                      <div class="d-flex">
                          <form action="/dashboard/rule" method="GET">
                            <div class="d-flex">
                              <input type="search" class="form-control me-2" placeholder="Search" aria-label="Search" name="search">
                              <button class="btn btn-outline-secondary" type="submit">Search</button>
                            </div>
                           </form>
                      </div>
                  </div>

                  
            </div>
   </div>


   <div class="card">
       <div class="card-header text-white bg-black">
           Data rule
       </div>
      
       <div class="card-body">
           <table class="table">
               <thead>
                   <tr>
                       <th scope="col">No</th>
                       <th scope="col">Nama kerusakan</th>
                       <th scope="col">Nama solusi</th>
                       <th scope="col">Gejala</th>
                       <th scope="col">Aksi</th>
                   </tr>
               </thead>
               <tbody>
                @foreach ($ruleTable as $data)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td> <b>{{$data->kerusakan->kode_kerusakan}}</b> | {{$data->kerusakan->nama_kerusakan}} </td>
                        <td> <b>{{$data->solusi->kode_solusi}}</b>| {{$data->solusi->nama_solusi}}</td>
                        <td>
                          @if ($data->relasi_gejala)
                            IF
                                @foreach ($data->relasi_gejala as $item)
                                -  <b> {{$item->kode_gejala}} </b> | {{$item->nama_gejala}}   <br> 

                                 @endforeach
                            @endif
                        
                        </td>
                        <td>
                            <a href="/dashboard/rule/{{ $data->id}}/tambah_gejala" class="badge bg-success">
                                Tambah gejala
                            </a>
                            <a href="/dashboard/rule/{{ $data->id}}/edit" class="badge bg-warning">
                                Edit
                            </a>
                            <form action="/dashboard/rule/{{ $data->id }}" class="d-inline" method="post">
                                @method('delete')
                                @csrf
                                <button class="badge bg-danger border-0" onclick="return confirm('yakin hapus data?')"> 
                                    
                                    Hapus
                                    
                                </button>
                            </form>

                        </td>
                    </tr>
                @endforeach
                   
                  
                  </tbody>
              </table>
          </div>
</div>


  @include('dashboard.rule.add_rule')

 
    @if ($errors->all())
    
        <script> $(document).ready(function()
            { 
            $('#staticBackdrop').modal('show'); 
            }); 
        </script>

        
        
    @else
        <script> $(document).ready(function()
            { 
            $('#staticBackdrop').modal('hide'); 
            }); 
        </script>
    @endif
    



@endsection

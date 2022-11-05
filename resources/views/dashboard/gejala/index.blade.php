@extends('dashboard.layouts.main')
@section('title', 'gejala')
@section('content')
    

<div class="mx-auto">
    
    <div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Daftar Gejala</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
                    Tambah Data
                  </button>

                  <form class="d-flex">
                      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                      <button class="btn btn-outline-success" type="submit">Search</button>
                  </form>

                  
            </div>
   </div>


   <div class="card">
       <div class="card-header text-white bg-black">
           Data Gejala
       </div>
      
       <div class="card-body">
           <table class="table">
               <thead>
                   <tr>
                       <th scope="col">No</th>
                       <th scope="col">Kode Gejala</th>
                       <th scope="col">Nama Gejala</th>
                       <th scope="col">deskripsi Gejala</th>
                       <th scope="col">Aksi</th>
                   </tr>
               </thead>
               <tbody>
                @foreach ($gejalaTable as $data)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td> {{$data->kode_gejala}} </td>
                        <td>{{$data->nama_gejala}}</td>
                        <td>{{$data->deskripsi_gejala}}</td>
                        <td>
                            <a href="/dashboard/gejala/{{ $data->kode_gejala}}/edit" class="badge bg-warning">
                                Edit
                            </a>
                            <form action="/dashboard/gejala/{{ $data->id }}" class="d-inline" method="post">
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


  @include('dashboard.gejala.add_gejala')

 
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
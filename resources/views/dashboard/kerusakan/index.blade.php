@extends('dashboard.layouts.main')
@section('title', 'kerusakan')
@section('content')
    

<div class="mx-auto">
    
    <div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Daftar kerusakan</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
                    Tambah Data
                  </button>

                  <div class="row">
                      <div class="d-flex">
                          <form action="/dashboard/kerusakan/index" method="GET">
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
           Data kerusakan
       </div>
      
       <div class="card-body">
           <table class="table">
               <thead>
                   <tr>
                       <th scope="col">No</th>
                       <th scope="col">Kode kerusakan</th>
                       <th scope="col">Nama kerusakan</th>
                       <th scope="col">deskripsi kerusakan</th>
                       <th scope="col">Aksi</th>
                   </tr>
               </thead>
               <tbody>
                @foreach ($kerusakanTable as $data)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td> {{$data->kode_kerusakan}} </td>
                        <td>{{$data->nama_kerusakan}}</td>
                        <td>{{$data->deskripsi_kerusakan}}</td>
                        <td>
                            <a href="/dashboard/kerusakan/{{ $data->kode_kerusakan}}/edit" class="badge bg-warning">
                                Edit
                            </a>
                            <form action="/dashboard/kerusakan/{{ $data->id }}" class="d-inline" method="post">
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


  @include('dashboard.kerusakan.add_kerusakan')

 
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

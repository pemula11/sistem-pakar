@extends('dashboard.layouts.main')

@section('content')
    

<div class="mx-auto">
    <div class="card">
        <div class="card-header text-white bg-primary">
            Edit Data Gejala
        </div>
        <div class="card-body">
            <form action="" method="POST">
                <div class="mb-3 row">
                    <label for="kode" class="col-sm-2 col-form-label">Kode Gejala</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="kode" name="kode">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama Gejala</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                </div>
                <div class="col-12" align="right">
                    <input type="submit" name="simpan" value="Simpan Data" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
    <div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Daftar Gejala</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
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
                       <th scope="col">Aksi</th>
                   </tr>
               </thead>
               <tbody>
                   <tr>
                       <th scope="row">1</th>
                       <td>11</td>
                       <td>Keyboard rusak</td>
                       <td>edit delete</td>
                   </tr>
                   <tr>
                       <th scope="row">2</th>
                       <td>2</td>
                       <td>Bunyi beep-beep</td>
                       <td>edit delete</td>
                   </tr>
                   <tr>
                       <th scope="row">3</th>
                       <td colspan="2">Baterai cepat habis</td>
                       <td>edit delete</td>
                   </tr>
                       <tr>
                       <th scope="row">4</th>
                       <td colspan="2">Larry the Bird</td>
                       <td>edit delete</td>
                   </tr>
                  </tbody>
              </table>
          </div>
</div>

@endsection
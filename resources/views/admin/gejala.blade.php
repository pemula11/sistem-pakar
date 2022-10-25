<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .mx-auto { width: 800px; }
        .card { margin-top: 10px}
    </style>
    <title>gejala</title>
  </head>
  <body>
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
                  <div class="col-12" align ="right">
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
      

      

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>

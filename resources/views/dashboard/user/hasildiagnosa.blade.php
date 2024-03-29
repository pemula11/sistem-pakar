<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <!-- Style CSS -->
    <link rel="stylesheet" href="/css/style.css">

    <title>Beji Center | {{ $tittle }}</title>

    <!-- font icons -->
    <link rel="stylesheet" href="/vendors/themify-icons/css/themify-icons.css">

    <link rel="stylesheet" href="/vendors/animate/animate.css">

    <style>
        .form-horizontal{
    display:block;
    width:50%;
    margin:0 auto;
}
    </style>
  </head>
  <body style="background-image: url(/imgs/laptop.jpg)">

    <!-- Navbar -->
    @include('partials.navbar2')

    <!-- Header -->
 
    
        
   
    <!-- book a table Section  -->
   <div class="text-center">
    <div class="container-fluit has-bg-overlay text-center text-light has-height-lg middle-items" id="book-table">
        <h2 class="section-title mb-5"> HASILNYA ADALAH  </h2>
        @if ($kesimpulan)
        <h4>laptop anda mengalami kerusakan pada : {{$dataHasil->kerusakan->nama_kerusakan}}</h4>
        <h4>Dengan Gejala</h4>
            @if ($dataHasil->relasi_gejala)

            @foreach ($dataHasil->relasi_gejala as $item)
            <p>-   {{$item->nama_gejala}} </p>
            @endforeach
            @endif


        <h4>Solusinya adalah : {{$dataHasil->solusi->nama_solusi}}</h4>
        @else
        Tidak ada hasil
        @endif
    </div>
   </div>
  
    


   
   

  <!-- page footer  -->
  <div class="container-fluid bg-dark text-light has-height-md middle-items border-top text-center wow fadeIn">
    <div class="row">
        <div class="col-sm-4">
            <h3>EMAIL US</h3>
            <P class="text-muted">Andri@example.com</P>
        </div>
        <div class="col-sm-4">
            <h3>CALL US</h3>
            <P class="text-muted">(123) 456-7890</P>
        </div>
        <div class="col-sm-4">
            <h3>FIND US</h3>
            <P class="text-muted">Home</P>
        </div>
    </div>
  </div>
  <div class="bg-dark text-light text-center border-top wow fadeIn">
    <p class="mb-0 py-3 text-muted small">&copy; Copyright <script>document.write(new Date().getFullYear())</script> Made with <i class="ti-heart text-danger"></i> By <a>Andri Center</a></p>
  </div>
  <!-- end of page footer -->
  
    <!-- core  -->
    <script src="/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="/vendors/bootstrap/bootstrap.bundle.js"></script>

    <!-- bootstrap affix -->
    <script src="/vendors/bootstrap/bootstrap.affix.js"></script>

    <!-- wow.js -->
    <script src="/vendors/wow/wow.js"></script>

    <!-- js -->
    <script src="/js/style.js"></script>

    
  </body>
</html>
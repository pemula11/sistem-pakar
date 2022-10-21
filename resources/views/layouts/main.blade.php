<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>BEJI CENTER | {{ $tittle }}</title>
    
    <!-- Style CSS -->
    <link rel="stylesheet" href="/css/style.css">

    <!-- font icons -->
    <link rel="stylesheet" href="/vendors/themify-icons/css/themify-icons.css">

    <link rel="stylesheet" href="/vendors/animate/animate.css">

  </head>
  <body style="background-image: url(/imgs/laptop.jpg)" data-spy="scroll" data-target=".navbar" data-offset="40" id="home">

    <!-- Navbar -->
    @include('partials.navbar')
    
    <!-- Header -->
    @yield('container')

    <!-- About Section  -->
      <div id="about" class="container-fluid wow fadeIn" id="about"data-wow-duration="1.5s">
        <div class="row">
          <div class="col-lg-6 has-img-bg"></div>
            <div class="">
              <div class="row justify-content-center">
                <div class="col-sm-8 py-5 my-5">
                  <h2 class="row justify-content-center mb-4">About Us</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, quisquam accusantium nostrum modi, nemo, officia veritatis ipsum facere maxime assumenda voluptatum enim! Labore maiores placeat impedit, vero sed est voluptas!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita alias dicta autem, maiores doloremque quo perferendis, ut obcaecati harum, <br><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum necessitatibus iste,
                  nulla recusandae porro minus nemo eaque cum repudiandae quidem voluptate magnam voluptatum? <br>Nobis, saepe sapiente omnis qui eligendi pariatur. quis voluptas. Assumenda facere adipisci quaerat. Illum doloremque quae omnis vitae.</p>
                  <p><b>Lonsectetur adipisicing elit. Blanditiis aspernatur, ratione dolore vero asperiores explicabo.</b></p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos ab itaque modi, reprehenderit fugit soluta, molestias optio repellat incidunt iure sed deserunt nemo magnam rem explicabo vitae. Cum, nostrum, quidem.</p>
                </div>
              </div>
            </div>
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
                <P class="text-muted">BEJI CENTER</P>
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
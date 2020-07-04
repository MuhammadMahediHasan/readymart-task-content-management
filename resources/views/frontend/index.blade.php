<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Contend Management</title>

  <!-- Bootstrap core CSS -->
  <link href="{{ asset('frontend_assets/js/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Custom styles for this site -->
  <link href="{{ asset('frontend_assets/css/style.css') }}" rel="stylesheet">
</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Contend Management</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">
    <div class="row">
      <!-- Section One -->
      <div class="col-lg-8 section-1">
        <div class="row">
            <div class="col-lg-7 section-1-lg">
              <div class="main_image">
                <img class="img-fluid rounded" src=" {{ asset('frontend_assets/images/500x325.png') }} " alt="">
                <div class="overlay_image">
                    <img src="{{ asset('frontend_assets/images/playbutton.png') }}" alt="" />
                </div>
              </div>
             <!--  <iframe style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;" src="https://www.youtube.com/embed/DvKm5NjGXzM?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe> -->
              <p>title</p>
            </div>
            <div class="col-lg-5">
              <div class="row">
                <div class="col-lg-6 section-1-sm">
                  <img class="img-fluid rounded" src=" {{ asset('frontend_assets/images/500x325.png') }} " alt="">
                  <p>title</p>
                </div>
                <div class="col-lg-6 section-1-sm">
                  <img class="img-fluid rounded" src=" {{ asset('frontend_assets/images/500x325.png') }} " alt="">
                  <p>title</p>
                </div>
                <div class="col-lg-6 section-1-sm">
                  <img class="img-fluid rounded" src=" {{ asset('frontend_assets/images/500x325.png') }} " alt="">
                  <p>title</p>
                </div>
                <div class="col-lg-6 section-1-sm">
                  <img class="img-fluid rounded" src=" {{ asset('frontend_assets/images/500x325.png') }} " alt="">
                <p>title</p>
                </div>
              </div>
            </div>
        </div>
      </div>

      <!-- Section Two -->
      <div class="col-lg-4 section-2">
          <div class="row">
            <div class="col-lg-12">
              <img class="img-fluid rounded" src=" {{ asset('frontend_assets/images/500x325.png') }} " alt="">
              <p>title</p>
            </div>
            <div class="col-lg-12">
              <div class="row">
                <div class="col-lg-6 section-2-sm">
                  <img class="img-fluid rounded" src=" {{ asset('frontend_assets/images/500x325.png') }} " alt="">
                  <p>title</p>
                </div>
                <div class="col-lg-6 section-2-sm">
                  <img class="img-fluid rounded" src=" {{ asset('frontend_assets/images/500x325.png') }} " alt="">
                  <p>title</p>
                </div>
                <div class="col-lg-6 section-2-sm">
                  <img class="img-fluid rounded" src=" {{ asset('frontend_assets/images/500x325.png') }} " alt="">
                  <p>title</p>
                </div>
                <div class="col-lg-6 section-2-sm">
                  <img class="img-fluid rounded" src=" {{ asset('frontend_assets/images/500x325.png') }} " alt="">
                  <p>title</p>
                </div>
              </div>
            </div>
          </div>
      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- JavaScript CDn-->
  <script src="{{ asset('frontend_assets/js/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('frontend_assets/js/bootstrap/js/bootstrap.bundle.min.js') }}"></script><script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.11/vue.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.2/axios.min.js"></script>

</body>

</html>

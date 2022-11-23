<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="/css/styles.css">

  <!-- fa aweswome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">


  <title>IWS || {{ $tittle }}</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-primary">
    <div class="container my-container-nav">
      <a class="navbar-brand" href="#">Solo Tour</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse link-hover" id="navbarNavDropdown">
        <ul class="ms-auto navbar-nav j2">
          <li class="nav-item">
            <a class="nav-link  {{ ($tittle === 'Home') ? 'active' : '' }}" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle {{ ($tittle === 'Wisata Alam' || $tittle === 'Wisata Edukasi') ? 'active' : '' }}" href="#" id="navbarDropdownMenuLink" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">
              Wisata
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item {{ ($tittle === 'Wisata Alam') ? 'active' : '' }}" href="/alamlist">Alam</a></li>
              <li><a class="dropdown-item {{ ($tittle === 'Wisata Edukasi') ? 'active' : '' }}" href="/edukasilist">Edukasi</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle {{ ($tittle === 'List Cafe' OR $tittle ==='List Angkringan' OR $tittle ==='List Taman') ? 'active' : '' }}" href="#" id="navbarDropdownMenuLink" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">
              Tongkrongan
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item {{ ($tittle === 'List Cafe') ? 'active' : '' }}" href="/cafelist">Cafe</a></li>
              <li><a class="dropdown-item {{ ($tittle === 'List Taman') ? 'active' : '' }}" href="/tamanlist">Taman</a></li>
              <li><a class="dropdown-item {{ ($tittle === 'List Angkringan') ? 'active' : '' }}" href="/angkringanlist">Angkringan</a></li>
            </ul>
          </li>
          @auth
        <li class="nav-item dropdown d-xl-block d-lg-block d-none">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Welcome back, {{ Auth()->user()->username }}
          </a>
        
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              @can('admin')
              <li><a class="dropdown-item" href="/dashboard">Dashboard</a></li>
              <li><hr class="dropdown-divider"></li>
          @endcan
            <li>
              <form action="/logout" method="post">
                @csrf
                <button class="dropdown-item" type="submit"><i class="fa-solid fa-arrow-right-from-bracket"></i>Logout</button>
              </form>
              {{-- <a class="dropdown-item" href="#"><i class="fa-solid fa-arrow-right-from-bracket"></i>Logout</a> --}}
            </li>
          </ul>
               <li class="nav-item d-block d-lg-none d-sm-block d-md-block d-xl-none">
                {{-- <a class="nav-link" aria-current="page" href="/login"><i class="fa-solid fa-arrow-right-from-bracket"></i>Logout</a> --}}
                  <form action="/logout" method="post">
                    @csrf
                    <button class="nav-link" type="submit"><i class="fa-solid fa-arrow-right-from-bracket"></i>Logout</button>
                  </form>
              </li>
        </li>
              @else
              <li class="nav-item d-xl-block d-lg-block d-md-none d-sm-none d-none">
                <a class="nav-link" aria-current="page" href="/login"><i class="me-2 fa-solid fa-right-from-bracket"></i>Login</a>
              </li>
              <li class="nav-item d-block d-lg-none d-sm-block d-md-block d-xl-none">
                <a class="nav-link" aria-current="page" href="/login"><i class="me-2 fa-solid fa-right-from-bracket"></i>Login</a>
              </li>
          @endauth

        </ul>
        {{-- <div class="bungkus j3 mx-auto me-lg-2">
          <form action="/angkringanlist"  class="d-flex bt-search">
            <input class="ip-search form-control" type="search" placeholder="Jembatan Cincin" aria-label="Search" name="search" value="{{ request('search') }}">
            <img class="btn a-search" src="/assets/bt-search.png" alt="">
          </form>
        </div>
      </div>
    </div>
  </nav> --}}

    @yield('search');

    @yield('content')
 

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row bag-1">
        <div class="col-6 col-lg-3 col-md-6 col-sm-6">
          <img src="assets/Re.png" style="max-width: 100vw; max-height:100vh;" alt="">
        </div>
        <div class="col-6 col-lg-2 col-md-6 col-sm-6 d-flex flex-column">
          <h5 class="fw-bold">Artikel terbaru</h5>
          <a href="">About</a>
          <a href="">Destination Highlight</a>
          <a href="">Spot Rekomendasi</a>
        </div>
        <div class="col-6 d-flex col-lg-2 col-md-6 col-sm-6 flex-column">
          <h5 class="fw-bold">UFFBI</h5>
          <a href="">Donate</a>
          <a href="">Credit Us</a>
          <a href="">Advertisement</a>
        </div>
        <div class="col-6 col-lg-2 col-md-6 col-sm-6 d-flex flex-column">
          <h5 class="fw-bold">Tongkrongan</h5>
          <a href="">Cafe</a>
          <a href="">Angkringan</a>
          <a href="">Taman</a>
        </div>
        <div class="col-6 col-lg-2 col-md-6 col-sm-6 d-flex flex-column">
          <h5 class="fw-bold">Wisata</h5>
          <a href="">Alam</a>
          <a href="">Edukasi</a>
        </div>
        <div class="col-6 col-lg-1 col-md-6 col-sm-6 d-flex flex-column">
          <h5 class="fw-bold">Team</h5>
          <a href="">M.Ramadhaniyanto</a>
          <a href="">Habib I</a>
        </div>
      </div>
      <div class="row pt-3">
        <div class="col-4 col-lg-3 col-md-6 col-sm-6 sosmed fw-bold">
          <a href=""><i class="fa-brands fa-instagram fa-2x"></i></a>
          <a href=""><i class="fa-brands fa-twitter fa-2x"></i></a>
          <a href=""><i class="fa-brands fa-facebook fa-2x"></i></a>
          <a href=""><i class="fa-brands fa-linkedin fa-2x"></i></a>
        </div>
        <div class="col-6 col-lg-9 col-md-6 col-sm-6 bot-footer mb-3"></div>
      </div>
      <div class="row">
        <span class="col-3 col-lg-3 col-md-6 col-sm-6 "></span>
        <p class="text-center fw-bold col-8 col-lg-8 col-md-6 col-sm-6">Copyright by Mohammad Ramadhaniyanto &
          Habib Ismail</p>
        <span class="col-2 col-lg-3 col-md-6 col-sm-6"></span>
      </div>
    </div>
  </footer>

  <!-- endFooter -->



  <!-- end caraousel slider -->
  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>
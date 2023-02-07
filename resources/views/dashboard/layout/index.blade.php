<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">
    <link rel="stylesheet" href="/css/dashboard.css">

    {{-- Trix editor --}}
      <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0-beta.0/dist/trix.css">
  <script type="text/javascript" src="https://unpkg.com/trix@2.0.0-beta.0/dist/trix.umd.min.js"></script>

    {{-- Font Aweswome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!-- Bootstrap core CSS -->
<link href="/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    
    <style>
      trix-toolbar [data-trix-button-group = "file-tools"]{
        display: none;
      }
    </style>
</head>
  <body>
    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Solo Tour</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  @yield('search')
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
         <form action="/logout" method="post">
            @csrf
            <button class="nav-link bg-dark px-3 border-0" type="submit"><i class="fa-solid fa-arrow-right-from-bracket"></i>Logout</button>
          </form>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
              <span data-feather="home"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboardAlam*') ? 'active' : '' }}" href="/dashboardAlam">
              <span data-feather="file"></span>
              List Wisata Alam
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboardEdukasi*') ? 'active' : '' }}" href="/dashboardEdukasi">
              <span data-feather="shopping-cart"></span>
              List Wisata Edukasi
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboardCafe*') ? 'active' : '' }}" href="/dashboardCafe">
              <span data-feather="bar-chart-2"></span>
              List Cafe
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboardAngkringan*') ? 'active' : '' }}" href="/dashboardAngkringan">
              <span data-feather="bar-chart-2"></span>
              List Angkringan
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboardTaman*') ? 'active' : '' }}" href="/dashboardTaman">
              <span data-feather="layers"></span>
              List Taman
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboardPengunjung*') ? 'active' : '' }}" href="/dashboardPengunjung">
              <span data-feather="layers"></span>
              Daftar Pengunjung
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        @yield('content')
    </main>

  </div>
</div>


    <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="/js/dashboard.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>

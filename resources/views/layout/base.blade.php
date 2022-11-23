<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<style>
  img{
    opacity: 0.7;
  }
</style>
<body>
  <header class="mx-auto">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img height="450px" src="https://i.ytimg.com/vi/6qM3jpcIeWI/maxresdefault.jpg" class="d-block w-100" alt="S/I">
        </div>
        <div class="carousel-item">
          <img height="450px" src="https://fondosmil.com/fondo/26240.jpg" class="d-block w-100" alt="S/I">
        </div>
        <div class="carousel-item">
          <img height="450px" src="https://phantom-marca.unidadeditorial.es/d73341eed3bc0b93fe783c299a36dddd/resize/1320/f/jpg/assets/multimedia/imagenes/2021/05/05/16202352799711.jpg" class="d-block w-100" alt="S/I">
        </div>
        <div class="carousel-item">
          <img height="450px" src="https://c4.wallpaperflare.com/wallpaper/108/140/869/digital-digital-art-artwork-fantasy-art-drawing-hd-wallpaper-preview.jpg " class="d-block w-100" alt="S/I">
        </div>
        <div class="carousel-item">
          <img height="450px" src="https://newevolutiondesigns.com/images/freebies/cool-4k-wallpaper-2.jpg " class="d-block w-100" alt="S/I">
        </div>
        <div class="carousel-item">
          <img height="450px" src="https://wallpaperaccess.com/full/269413.jpg" class="d-block w-100" alt="S/I">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

  </header>
    <nav class="navbar navbar-light navar-expand-* bg-light fixed-right">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </div>
    </nav>
  @yield('cuerpo')

  <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
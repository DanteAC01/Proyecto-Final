<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
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
    <div class="frases">
      <p>
        756E2070726F6772616D61646F7220616C206E61636572206E6F206C6C6F7261206469636520686F6C61206D756E646F
      </p>
    </div>
    
  </header>
  @yield('cuerpo')
<style>
  .container{
  width: 100%;
  max-width: 100%;
  justify-content: center;  
  display: flex;
  flex-wrap: wrap;
  margin: auto;   
  }
  .container .card:hover{
    transform: translateY(-15px);
    margin: 15px;
  }
  .card{
    margin: 15px;
  }
  .container .card img{
    width: 330px;
    height: 220px;
    margin: auto;
  }
  .link{
    text-decoration: none;
    display: block;
    color: black;
    margin-left: 20px;
  }
  .uno{
    width: 40%;
    margin-right: 80px;
  }
  .dos{
    width: 40%;
  }
  .h{
    margin-top: 15px;
  }
  .hr1 {border: 3px solid #666; width: 95%; margin: auto; border-radius: 300px/10px; height: 0px; text-align: center;}
  .hr {border: 0; height: 24px; box-shadow: inset 0 22px 12px -12px rgb(5, 134, 117); color: rgb(22, 15, 129); text-align: center;}
  .hr:after {content:"\2605\2600\2605\2600\2605\2600\2605\2600\2605\2600\2605\2600\2605\2600\2605\2600\2605\2600\2605\2600\2605\2600\2605\2600\2605\2600\2605\2600\2605\2600\2605\2600\2605"; font-size: 14px;color: rgba(226, 171, 171, 0.123);}
</style>
<hr class="hr1">
  <div class="container">
    <div class="card">
      <img src="https://fondosmil.com/fondo/26250.jpg" class="card-img" alt="...">
    </div>
    <div class="card">
      <img src="https://p4.wallpaperbetter.com/wallpaper/782/64/1007/epica-the-holograpic-principle-wallpaper-preview.jpg" class="card-img" alt="...">
    </div>
    <div class="card">
      <img src="https://dam.smashmexico.com.mx/wp-content/uploads/2018/08/29203205/marvel-deadpool-metidas-de-pata-top5-cover.jpg" class="card-img" alt="...">
    </div>
    <div class="card">
      <img src="https://freakuotes.com/users/stacks/594-epicas-d55d68f783529ac3f7b2833caa28ba70e085f251.jpg" class="card-img" alt="...">
    </div>
    <div class="card">
      <img src="https://www.todogadget.net/files/12-2021/ad62476/fondos-de-pantalla-super-epicos-usd-1884998394_large.jpg" class="card-img" alt="...">
    </div>
    <div class="card">
      <img src="https://w0.peakpx.com/wallpaper/735/899/HD-wallpaper-fenix-epico-fantasia-leyenda.jpg" class="card-img" alt="...">
    </div>
  </div>
  <hr class="hr1">
  <div class="container">
    <div class="uno">
      <h4 class="h">Linkcografía</h4>
      <hr class="hr">
        <a class="link" href="https://www.youtube.com/watch?v=JDs45GmZWUo"><i class="fas fa-link"></i>Boostrap</a>
        <a class="link" href="https://lenguajehtml.com/html/"><i class="fas fa-link"></i>Html</a>
        <a class="link" href="https://www.google.com/search?q=imagenes+epicas&rlz=1C1CHBF_esPE1032PE1032&source=lnms&tbm=isch&sa=X&ved=2ahUKEwjuyIHzoMX7AhWuGbkGHVu9DZ0Q_AUoAXoECAEQAw&biw=1304&bih=665&dpr=1"><i class="fas fa-link"></i>Imagenes</a>
        <a class="link" href="https://rockcontent.com/es/blog/bootstrap/"><i class="fas fa-link"></i>Informacion</a>
    </div>
    <div class="dos">
      <h4 class="h">Redes Sociales</h4>
      <hr class="hr">
      <a class="link" href="https://www.youtube.com/">YouTube</a>
      <a class="link" href="https://www.facebook.com/">Facebook</a>
      <a class="link" href="hhttps://twitter.com/">Twitter</a>
      <a class="link" href="https://www.instagram.com/">Instagram</a>
    </div>
  </div>
  <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
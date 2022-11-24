@extends('layout.base')
@section('titulo', 'Inicio')
@section('cuerpo')
<p>AQUI IRA ESA VAINA DE LA ROCHIS</p>

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
      <a class="link" href="https://www.youtube.com/watch?v=JDs45GmZWUo"><i class="bi bi-link-45deg"></i>Boostrap</a>
      <a class="link" href="https://rockcontent.com/es/blog/bootstrap/"><i class="bi bi-link-45deg"></i>Informacion</a>
      <a class="link" href="https://lenguajehtml.com/html/"><i class="bi bi-link-45deg"></i>Html</a>
      <a class="link" href="https://www.google.com/search?q=imagenes+epicas&rlz=1C1CHBF_esPE1032PE1032&source=lnms&tbm=isch&sa=X&ved=2ahUKEwjuyIHzoMX7AhWuGbkGHVu9DZ0Q_AUoAXoECAEQAw&biw=1304&bih=665&dpr=1"><i class="bi bi-link-45deg"></i> Imagenes</a>
      <a class="link" href="https://rockcontent.com/es/blog/bootstrap/"><i class="bi bi-link-45deg"></i> Informacion</a>
  </div>
  <div class="dos">
    <h4 class="h">Redes Sociales</h4>
    <hr class="hr">
    <a class="link" href="https://www.youtube.com/"><i class="bi bi-link-45deg"></i>YouTube</a>
    <a class="link" href="https://www.facebook.com/"><i class="bi bi-link-45deg"></i> Facebook</a>
    <a class="link" href="hhttps://twitter.com/"><i class="bi bi-link-45deg"></i> Twitter</a>
    <a class="link" href="https://www.instagram.com/"><i class="bi bi-link-45deg"></i> Instagram</a>
  </div>
</div>
      </div>
  </div>
</div>
<style>
.accordion-button{
  background-color: transparent;
  color: white;
  padding: 5px;
  width: 100%;
}
.accordion-item{
  background-color: transparent;
  color: white;
  width: 100%
}
.carousel-inner img{
  opacity: 0.7;
}
.ei{
  font-size: 20px;
  text-decoration: none;
  color: white;
}
#image{
  background-image: url(3.jpg);
  align-content: center;
  backface-visibility: hidden;
}
.container{
width: 100%;
max-width: 100%;
justify-content: center;  
display: flex;
flex-wrap: wrap;
margin: auto;   
}
.frases{
  position: absolute; left: 40px; top: 40px;
  width: 95%;
  margin-top: 35px;
  text-align: center;
  color: rgb(236, 220, 220);
  text-shadow: 0.1em 0.1em 0.05em rgb(122, 7, 133);
  text-shadow: 0.1em 0.1em 0.2em rgb(90, 176, 187);
}
.frases p{
  text-align: center;
  font-size: 30px;
  font-family: initial;
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
.container-fluid{
  margin-top:1px;
}
</style>
@endsection
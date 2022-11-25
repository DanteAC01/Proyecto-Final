@extends('layout.base')
@section('title', 'Correo')
@section('cuerpo')
<html>
    <title>Enviar Correo</title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="shortcut icon" href="https://cdn.pixabay.com/photo/2021/03/27/06/31/code-6127616_960_720.png" type="image/png">
    <header>
        <div>
            <marquee behavior="scroll" direction="left" scrollamount="30" ><p>Bienvenidos A Un Nuevo Amanecer<img src="https://www.transparentpng.com/thumb/smile/gGsgum-emoji-feliz-png-emoticon-smile-clipart-full-size.png" alt="S/In."></p></marquee>
        </div>
    </header>
    <body class="cuerpo">
        <div>
        <hr>
        <nav class="nav">
            <a class="a" href="index.html"><h2>Inicio</h2></a>
            |<a class="a" href="ahorcado.html">Ahorcado</a>
            |<a class="a" href="snake.html">Culebrita</a>
            <div class="b">
                <audio controls>
                    <source src="lp.mp3" type="audio/mp3">
                </audio>
            </div>
        </nav>
        <hr>
        <a class="a" href="Ejemplo03.html" target="_parent">Ejercicio 1</a>
        <a class="a" href="Ejemplo05-.html">Ejercicio 2</a>
        <a class="a" href="Ejemplo07.html">Ejercicio 3</a>
        <a class="a" href="Ejercicio9.html">Ejercicio 4</a>
        <a class="a" href="Ejercicio10.html">Ejercicio 5</a>
        <a class="a" href="Ejercicio11.html">Ejercicio 6</a>
        <hr>
        </div>
<body>
<script language="javascript">
function mailpage()
{
mail_str = "mailto:75970530@idexperujapon.edu.pe?" +
document.title;
mail_str += "&body=Hola, mira este video(https://www.youtube.com/watch?v=vonoZYSx4OM&ab_channel=Luisjefe1Vlogs)--"
+ document.title;
mail_str += ".Enlace:https://www.youtube.com/watch?v=vonoZYSx4OM&ab_channel=Luisjefe1Vlogs" 
+ location.href;
location.href=mail_str;
}
</script>
<center>
    <button>
        <a  HREF="javascript:mailpage()">Mandar correo</a>
    </button>    
</center>
<style>
    button{
        padding: 10px;
        margin-top: 50px;
        background-color: aqua;
        border-radius: 20px;
        border-color: brown;
        border-style: outset;
        font-size: 50px;
    }
    button a{
        text-decoration: none;

    }
    img{
        width: 100%;
    }
    body{
        background-image: url("https://1000marcas.net/wp-content/uploads/2019/11/logo-Gmail-1.png");
        background-size: 100%;
        background-repeat: no-repeat;
    }
</style>
</body>
</html>
@stop
@extends('layout.base')
@section('title', 'Imprimir')
@section('cuerpo')
<html>
<TITLE>Ejemplo 09</TITLE>
<link rel="stylesheet" href="estilos.css">
<link rel="shortcut icon" href="https://cdn.pixabay.com/photo/2021/03/27/06/31/code-6127616_960_720.png" type="image/png">
<!-- Imprimir un documento -->
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
<p class="p">LOBITO</p>
<p align="center"><img class="img" src="https://images5.alphacoders.com/652/652555.png" width="714" height="471" border="0"></p>
<form>
<input type="button" value="Imprimir" onClick="window.print()">
</form>
<style>
    .p{
        font-family:italic Georgia;
        text-align: center;
        font-size: 40px;
        margin-top: 20px;
        margin-bottom: 5px;
    }
    .img{
        border: 1px solid aqua;
        border-width: 10px;
        border-radius: 20px;
        border-style:dashed;
    }
    input{
        background-color: rgb(18, 202, 178);
        color: black;
        padding: 10px;
        margin-left: 50%;
        margin-right: 50%;
        border-radius: 10px;
        font-size: 30px;
    }
</style>
</body>
</html>
@stop
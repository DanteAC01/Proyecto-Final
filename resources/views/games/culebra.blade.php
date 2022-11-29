@extends('layout.base')
@section('title', 'Culebra')
@section('cuerpo')
        <link rel="shortcut icon" href="https://www.pngall.com/wp-content/uploads/2016/03/Snake-PNG-Image.png" type="image/png">
        <script language="JavaScript">
            //visualizar un mensaje de bienvenida
            alert("!bienvenido a nuestra pagina!");
        </script>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Juego de la culebrita</title>
    <style type="text/css">
        body{
            background-image: url(https://www.icegif.com/wp-content/uploads/icegif-4755.gif);
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
        }
        .h2{
            color: wheat;
            display: inline;
        }
        .h4{
            color: wheat;
            display: inline;
        }
	</style>
    <center>
        <h2 style="color: brown;">JUEGO DE LA CULEBRITA</h2>
        <meta charset="utf-8">
        <!-- Always force latest IE rendering engine
        (even in intranet) & Chrome Frame
        Remove this if you use the
        .htaccess -->

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
     <title>snake</title>
     <meta name="description"
           content=" ">
     <meta name="author" content="satur">
    <meta name="viewport" content="width=device-widt; initial-scale=1.0">
    <!-- Replace favicon.ico
    in the root of your domain and delete these
    references -->
    <link rel="shortcut icon" href="/favicon.ico">

</head>
    <style>
        canvas{
            border: 10px solid green;
        }
    </style>
        <body onkeydown="control(event);">
            <script src="snake.js"></script>
 <canvas id="canvas" width="500" height="500">
 </canvas>
            
            .
            .
            .
    <center>
<a href="https://www.youtube.com/">
<input class="btn btn-warning" type="button" value="IR A YOUTUBE"></a>
<a href="C:/Users/DILBERTH/Pictures/IMAGENES/FE/17013.jpg">
<input class="btn btn-warning" type="button" value="IR A UNA IMAGEN"></a>
<a href="DRAKARIS.mp4">
<input class="btn btn-warning" type="button" value="IR A UN VIDEO"></a>
<a href="C:\Users\DILBERTH\Pictures\IMAGENES\gif.gif">
<input class="btn btn-warning" type="button" value="GRACIAS"></a>
<br>
<br>
  </center>
    </body>

    <script>
       
        var velocidad = 90;
        var tamano = 10;
        class objeto{
            constructor(){
                this.tamano = tamano;
            }
            choque(obj){
                var difx = Math.abs(this.x - obj.x);
                var dify = Math.abs(this.y - obj.y);
                if(difx >= 0 && difx < tamano && dify >= 0 && dify < tamano){
                    return true;
                }else{
                    return false;
                }
            }
        }
        class Cola extends objeto{
            constructor(x,y){
                super();
                this.x = x;
                this.y = y;
                this.siguiente = null;
            }
            dibujar(ctx){
                if(this.siguiente != null){
                    this.siguiente.dibujar(ctx);
                }
                ctx.fillStyle = '#000FF';
                ctx.fillRect(this.x, this.y, this.tamano, this.tamano);
            }
            setxy(x,y){
                if(this.siguiente != null){
                    this.siguiente.setxy(this.x, this.y);
                }
                this.x = x;
                this.y = y;
            }
            meter(){
                if(this.siguiente == null){
                    this.siguiente = new Cola(this.x, this.y);
                }else{
                    this.siguiente.meter();
                }
            }
            verSiguiente(){
                return this.siguiente;
            }
        }
        class Comida extends objeto{
            constructor(){
                super();
                this.x = this.generar();
                this.y = this.generar();
            }
            generar(){
                var num = (Math.floor(Math.random() * 59))*10;
                return num;
            }
            colocar(){
                this.x = this.generar();
                this.y = this.generar();
            }
            dibujar(ctx){
                ctx.fillStyle = '#FF0000';
                ctx.fillRect(this.x, this.y,this.tamano,this.tamano);
            }
        }
        //objetos del juego
        var cabeza = new Cola(20,20);
        var comida = new Comida();
        var ejex = true;
        var ejey = true;
        var xdir = 0;
        var ydir = 0;
        function movimiento(){
            var nx = cabeza.x+xdir;
            var ny = cabeza.y+ydir;
            cabeza.setxy(nx,ny);
        }
        function control(event){
            var cod = event.keyCode;
            if(ejex){
                if(cod == 38){
                    ydir = -tamano;
                    xdir = 0;
                    ejex = false;
                    ejey = true;
                }
                if(cod == 40){
                    ydir = tamano;
                    xdir = 0;
                    ejex = false;
                    ejey = true;
                }
            }
            if(ejey){
                if(cod == 37){
                    ydir = 0;
                    xdir = -tamano;
                    ejey = false;
                    ejex = true;
                }
                if(cod == 39){
                    ydir = 0;
                    xdir = tamano;
                    ejey = false;
                    ejex = true;
                }
            }
        }
        function findeJuego(){
            xdir = 0;
            ydir = 0;
            ejex = true;
            ejey = true;
            cabeza = new Cola(20,20);
            comida = new Comida();
            alert('Perdiste');
        }
        function choquepared(){
            if(cabeza.x < 0 || cabeza.x > 590 || cabeza.y < 0 || cabeza.y > 590){
                findeJuego();
            }
        }
        function choquecuerpo(){
            var temp = null;
            try{
                temp = cabeza.verSiguiente().verSiguiente();
            }catch(err){
                temp = null;
            }
            while(temp != null){
                if(cabeza.choque(temp)){
                    //fin del juego
                    findeJuego();
                }else{
                    temp = temp.verSiguiente();
                }
            }
        }
        function dibujar(){
            var canvas = document.getElementById('canvas');
            var ctx = canvas.getContext('2d');
            ctx.clearRect(0,0,canvas.width,canvas.height);
            //
            cabeza.dibujar(ctx);
            comida.dibujar(ctx);
        }
        function main(){
            choquecuerpo();
            choquepared();
            dibujar();
            movimiento();
            if(cabeza.choque(comida)){
                comida.colocar();
                cabeza.meter();
            }
        }
        setInterval('main()',velocidad);
    </script>
    </html>
@stop
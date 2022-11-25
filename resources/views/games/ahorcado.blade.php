@extends('layout.base')
@section('title', 'Ahorcado')
@section('cuerpo')
<HTML>
    <HEAD>
        <TITLE>Ejemplo de juego</TITLE>
        <link rel="stylesheet" href="estilos.css">
        <link rel="shortcut icon" href="https://santiagosustentable.com/santiago2030/recursos/ahorcado/img/ahorcado_0.png" type="image/png">
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
                |<a class="a" href="ahorcado.html"><h4>Ahorcado</h4></a>
                |<a class="a" href="snake.html"><h4>Culebrita</h4></a>
                <div class="b">
                    <audio controls>
                        <source src="lp.mp3" type="audio/mp3">
                    </audio>
                </div>
            </nav>
            <hr>
            <a class="a" href="Ejemplo03.html"><h4>Ejecicio 1</h4></a>
            |<a class="a" href="Ejemplo05-.html"><h4>Ejecicio 2</h4></a>
            |<a class="a" href="Ejemplo07.html"><h4>Ejecicio 3</h4></a>
            |<a class="a" href="Ejercicio9.html"><h4>Ejecicio 4</h4></a>
            |<a class="a" href="Ejercicio10.html"><h4>Ejecicio 5</h4></a>
            |<a class="a" href="Ejercicio11.html"><h4>Ejecicio 6</h4></a>
            <hr>
            </div>
    </body>
        <style>
            h2{
                color:white;
                text-align: center;
            }
            h4{
                color: white;
                display: inline;
            }
            td input{
                background-color:white;
            }
            td textarea{
                background-color: red;
            }
        </style>
    <body background= "C:\Users\DILBERTH\Desktop\google-imagenes-2.jpg"></body>
        <SCRIPT LANGUAGE=JavaScript>
            var hombre = new Array("___\n", "   |\n", "   O\n", "  /", "|", "\\\n", "  /", " \\\n", "___")
            var palabra
            var libreriaPalabras = new Array("h a l c o n", "a g u i l a", "p a v o r e a l", "c i g u e ñ a", 
            "a v e s t r u z", "g o r r i o n", "l e c h u z a", "b u h o", "c a r p i n t e r o", "c o n d o r", 
            "c o l i b r i", "l o r o", "g u a c a m a y o", "p i n g u i n o", "c i s n e", "p e l i c a n o", 
            "b u i t r e", "p a l o m a", "c u e r v o", "ñ a n d u", "d 1 l b 3 r 7 h")
            var partes = 0
            var colNueva = 0
            var jugando 
            
            function ObtienePalabra() {                
                var indice = Math.round ( Math.random()* 20 )
                var cadena = new String( libreriaPalabras[indice] )
                palabra = cadena.split(" ")
            }            
            function DibujaHombre(visor, partes) {             
                var dibujo = ""
                if (partes < 10)
                    for(var x = 0; x < partes; x++) {
                        dibujo += hombre[x]
                    }
                visor.displayHombre.value = dibujo
            }
            
    function DibujaLetra(visor, letra) {       
        var flag = false      
        var cadena = new String(visor.displayPalabra.value)       
        var letrasCadena = cadena.split(" ")
        cadena = ""
        for(var x = 0; x < palabra.length; x++) {
            if (palabra[x] == letra) {
                cadena += letra + " "
                flag = true
            } else
                cadena += letrasCadena[x] + " "
        }
    visor.displayPalabra.value = cadena
    return flag
    }
    function NuevaLetra(visor, letra) {        
        visor.displayLetras.value += letra + " "	
        if(colNueva == 3) {
            visor.displayLetras.value += "\n"
            colNueva = 0
        } else
            colNueva++
    }
    function Juega(visor, letra) {        
        if (jugando) {            
            NuevaLetra(visor, letra)            
            var acierto = DibujaLetra(visor, letra)           
            if (!acierto)
                DibujaHombre(visor,  ++partes)
            if (partes == 9)
                FinJuego(false)
            else if (CompruebaPalabra(visor))
                FinJuego(true)
        } else {
            alert('Pulsa juego nuevo para comenzar\nuna partida nueva.')
        }
    }
function IniciaJuego(visor) {    
    jugando = true
    partes = 0
    colNueva = 0
    ObtienePalabra()
    DibujaHombre(visor, partes)
    visor.displayPalabra.value = ""
    for (var x = 0; x < palabra.length; x++)
        visor.displayPalabra.value += "_ "
    visor.displayLetras.value = ""
}
function CompruebaPalabra(visor) {    
    var fin = true    
    var cadena = new String(visor.displayPalabra.value)   
    var letrasCadena = cadena.split(" ")
    for(var x = 0; x < letrasCadena.length; x++)
        if (letrasCadena[x] == "_")
            fin = false
    return fin
}
function FinJuego(resultado) {    
    var solucion = ""
    jugando = false
    if(resultado) {
        document.visor.ganadas.value++
        alert("Acertaste !")
    } else {
        document.visor.perdidas.value++
        
        for (var x = 0; x < palabra.length; x++)
            solucion += palabra[x]
        alert("Has muerto !\n La palabra era: " + solucion)
        
        }
        
    }
        </script>
    </HEAD>
    <BODY> 
    <FORM NAME=visor>
        <center style="margin-top: 60px">
            <font color="red" style="font-size: 60px;">Juego del Ahorcado</font>
        </center>
        <audio controls style="float:right; ">
            <source src="C:\Users\DILBERTH\Music\DRAKARIS.mp3" type="audio/mp3"></audio>
        <video style="float: lefth;" src="GROD.mp4" width="250" height="100" 
    preload controls type="video/mp4"></video>
        <CENTER>
            <TABLE width=600>
                <font color="yellow">
                <TR>
                    <TD colspan=3 width=200 ALIGN=center><textarea name=displayHombre cols=20 rows=6></textarea>
                    <TD colspan=3 WIDTH=200 ALIGN=center><textarea name=displayLetras cols=20 rows=6></textarea>
                    <TD width=200>
                <TR>
                    <TD colspan=6 width=300 ALIGN=center><INPUT NAME=displayPalabra SIZE=42>
                    <TD ALIGN=center>&nbsp;
                <TR>
                    <td align=center width=50><input type=button name=botA value=" A " onClick="Juega(this.form, 'a')">
                    <td align=center width=50><input type=button name=botB value=" B " onClick="Juega(this.form, 'b')">
                    <td align=center width=50><input type=button name=botC value=" C " onClick="Juega(this.form, 'c')">
                    <td align=center width=50><input type=button name=botD value=" D " onClick="Juega(this.form, 'd')">
                    <td align=center width=50><input type=button name=botE value=" E " onClick="Juega(this.form, 'e')">
                    <td align=center width=50><input type=button name=botF value=" F " onClick="Juega(this.form, 'f')">
                    <td>
                <tr>
                    <td align=center><input type=button name=botG value=" G " onClick="Juega(this.form, 'g')">
                    <td align=center><input type=button name=botH value=" H " onClick="Juega(this.form, 'h')">
                    <td align=center><input type=button name=botI value=" I " onClick="Juega(this.form, 'i')">
                    <td align=center><input type=button name=botJ value=" J " onClick="Juega(this.form, 'j')">
                    <td align=center><input type=button name=botK value=" K " onClick="Juega(this.form, 'k')">
                    <td align=center><input type=button name=botL value=" L " onClick="Juega(this.form, 'l')">
                    <td align=left valign=middle><font color="yellow">Ganadas:  </font><input type=text name=ganadas size=4 value=0>
                <tr>
                    <td align=center><input type=button name=botM value=" M " onClick="Juega(this.form, 'm')">
                    <td align=center><input type=button name=botN value=" N " onClick="Juega(this.form, 'n')">
                    <td align=center><input type=button name=botÑ value=" Ñ " onClick="Juega(this.form, 'ñ')">
                    <td align=center><input type=button name=botO value=" O " onClick="Juega(this.form, 'o')">
                    <td align=center><input type=button name=botP value=" P " onClick="Juega(this.form, 'p')">
                    <td align=center><input type=button name=botQ value=" Q " onClick="Juega(this.form, 'q')">
                    <td align=left valign=middle><font color="yellow">Perdidas:  </font><input type=text name=perdidas size=4 value=0>
                <tr>
                    <td align=center><input type=button name=botR value=" R " onClick="Juega(this.form, 'r')">
                    <td align=center><input type=button name=botS value=" S " onClick="Juega(this.form, 's')">
                    <td align=center><input type=button name=botT value=" T " onClick="Juega(this.form, 't')">
                    <td align=center><input type=button name=botU value=" U " onClick="Juega(this.form, 'u')">
                    <td align=center><input type=button name=botV value=" V " onClick="Juega(this.form, 'v')">
                    <td align=center><input type=button name=botW value=" W " onClick="Juega(this.form, 'w')">
                    <td>
                <tr>
                    <td align=center><input type=button name=botX value=" X " onClick="Juega(this.form, 'x')">
                    <td align=center><input type=button name=botY value=" Y " onClick="Juega(this.form, 'y')">
                    <td align=center><input type=button name=botZ value=" Z " onClick="Juega(this.form, 'z')">
                <tr>
                    <td align=center><input type=button name=botX value=" 1 " onClick="Juega(this.form, '1')">
                    <td align=center><input type=button name=botY value=" 2 " onClick="Juega(this.form, '2')">
                    <td align=center><input type=button name=botZ value=" 3 " onClick="Juega(this.form, '3')">
                    <td align=center><input type=button name=botX value=" 4 " onClick="Juega(this.form, '4')">
                    <td align=center><input type=button name=botY value=" 5 " onClick="Juega(this.form, '5')">
                    <td align=center><input type=button name=botZ value=" 6 " onClick="Juega(this.form, '6')">
                <tr>
                    <td align=center><input type=button name=botX value=" 7 " onClick="Juega(this.form, '7')">
                    <td align=center><input type=button name=botY value=" 8 " onClick="Juega(this.form, '8')">
                    <td align=center><input type=button name=botZ value=" 9 " onClick="Juega(this.form, '9')">
                    <td align=center><input type=button name=botX value=" 0 " onClick="Juega(this.form, '0')">
                    <td colspan=10 align=center><input type=button name=Inicia value=" New Game " onClick="IniciaJuego(this.form)">
                    <td align=center ><input type=button value=Limpiar name=B1 onClick="this.form.ganadas.value='0' ;  this.form.perdidas.value='0'">
                      <style type="text/css">
          body{
            background-image: url(https://st3.depositphotos.com/2836267/18403/v/600/depositphotos_184031946-stock-illustration-sad-melancholy-hanged-man.jpg);
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
        }         
          </style>
            </TABLE>
        </CENTER>
    </FORM>      
    </BODY>
</HTML>
@stop
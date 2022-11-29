@extends('layout.base')
@section('title', 'Ahorcado')
@section('cuerpo')
      <link rel="shortcut icon" href="https://santiagosustentable.com/santiago2030/recursos/ahorcado/img/ahorcado_0.png" type="image/png">
        <style>
            h2{
                color:white;
                text-align: center;
            }
            h4{
                color: white;
                display: inline;
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
        <center>
            <font color="red" style="font-size: 60px; font-style:italic;">Juego del Ahorcado</font>
        </center>
        <CENTER>
            <TABLE class="table">
                <font color="yellow">
                <TR>
                    <TD colspan=3 ALIGN=center><textarea name=displayHombre cols=20 rows=5></textarea></TD>
                    <TD colspan=3 ALIGN=center><textarea name=displayLetras cols=20 rows=5></textarea></TD>
                </tr>
                <TR>
                    <TD colspan=6 ALIGN=center><INPUT align=center class="form-control" NAME=displayPalabra SIZE=42></TD>
                <TR>
                    <td align=center><input class="btn btn-success" type=button name=botA value=" A " onClick="Juega(this.form, 'a')"></td>
                    <td align=center><input class="btn btn-success" type=button name=botB value=" B " onClick="Juega(this.form, 'b')"></td>
                    <td align=center><input class="btn btn-success" type=button name=botC value=" C " onClick="Juega(this.form, 'c')"></td>
                    <td align=center><input class="btn btn-success" type=button name=botD value=" D " onClick="Juega(this.form, 'd')"></td>
                    <td align=center><input class="btn btn-success" type=button name=botE value=" E " onClick="Juega(this.form, 'e')"></td>
                    <td align=center><input class="btn btn-success" type=button name=botF value=" F " onClick="Juega(this.form, 'f')"></td>
                </TR>
                <tr>
                    <td align=center><input class="btn btn-success" type=button name=botG value=" G " onClick="Juega(this.form, 'g')"></td>
                    <td align=center><input class="btn btn-success" type=button name=botH value=" H " onClick="Juega(this.form, 'h')"></td>
                    <td align=center><input class="btn btn-success" type=button name=botI value=" I " onClick="Juega(this.form, 'i')"></td>
                    <td align=center><input class="btn btn-success" type=button name=botJ value=" J " onClick="Juega(this.form, 'j')"></td>
                    <td align=center><input class="btn btn-success" type=button name=botK value=" K " onClick="Juega(this.form, 'k')"></td>
                    <td align=center><input class="btn btn-success" type=button name=botL value=" L " onClick="Juega(this.form, 'l')"></td>
                    <td><font color="yellow">Ganadas:  </font><input class="btn btn-info" type=text name=ganadas size=4 value=0></td>
                </tr>
                <tr>
                    <td align=center><input class="btn btn-success" type=button name=botM value=" M " onClick="Juega(this.form, 'm')"></td>
                    <td align=center><input class="btn btn-success" type=button name=botN value=" N " onClick="Juega(this.form, 'n')"></td>
                    <td align=center><input class="btn btn-success" type=button name=botÑ value=" Ñ " onClick="Juega(this.form, 'ñ')"></td>
                    <td align=center><input class="btn btn-success" type=button name=botO value=" O " onClick="Juega(this.form, 'o')"></td>
                    <td align=center><input class="btn btn-success" type=button name=botP value=" P " onClick="Juega(this.form, 'p')"></td>
                    <td align=center><input class="btn btn-success" type=button name=botQ value=" Q " onClick="Juega(this.form, 'q')"></td>
                    <td><font color="yellow">Perdidas:  </font><input class="btn btn-info" type=text name=perdidas size=4 value=0></td>
                </tr>
                <tr>
                    <td align=center><input class="btn btn-success" type=button name=botR value=" R " onClick="Juega(this.form, 'r')"></td>
                    <td align=center><input class="btn btn-success" type=button name=botS value=" S " onClick="Juega(this.form, 's')"></td>
                    <td align=center><input class="btn btn-success" type=button name=botT value=" T " onClick="Juega(this.form, 't')"></td>
                    <td align=center><input class="btn btn-success" type=button name=botU value=" U " onClick="Juega(this.form, 'u')"></td>
                    <td align=center><input class="btn btn-success" type=button name=botV value=" V " onClick="Juega(this.form, 'v')"></td>
                    <td align=center><input class="btn btn-success" type=button name=botW value=" W " onClick="Juega(this.form, 'w')"></td>
                </tr>
                <tr>
                    <td></td>
                    <td align=center><input class="btn btn-success" type=button name=botX value=" X " onClick="Juega(this.form, 'x')"></td>
                    <td align=center><input class="btn btn-success" type=button name=botY value=" Y " onClick="Juega(this.form, 'y')"></td>
                    <td align=center><input class="btn btn-success" type=button name=botZ value=" Z " onClick="Juega(this.form, 'z')"></td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td></td>
                    <td></td>
                    <td align="center"><button class="btn btn-primary" type="button" name="Inicia" onClick="IniciaJuego(this.form)"><i class="bi bi-joystick"></i></button></td>
                    <td></td>
                    <td align="center"><button class="btn btn-warning" type=button name=B1 onClick="this.form.ganadas.value='0' ;  this.form.perdidas.value='0'"><i class="bi bi-backspace"></i></button></td>
                    <td></td>
                    <td></td>
                </tr>
                </TR>
                </font>
            </TABLE>
        </CENTER>
    </FORM>
                      <style type="text/css">
          body{
            background-image: url(https://st3.depositphotos.com/2836267/18403/v/600/depositphotos_184031946-stock-illustration-sad-melancholy-hanged-man.jpg);
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
        }         
          </style>     
    </BODY>
@stop
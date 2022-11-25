<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
</head>
<body>
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
      <div class="frases">
        <p>
          756E2070726F6772616D61646F7220616C206E61636572206E6F206C6C6F
                       7261206469636520686F6C61206D756E646F
        </p>
        <p>
        01110011 01101001 00100000 01100110 01110101 01101110 01100011 01101001 01101111 01101110 01100001 00100000 01111001 01100001 00100000 01101110 01101111 00100000 01101100 01100101 00100000 01101101 01110101 01100101 01110110 01100001 01110011 
        </p>
      </div>
  
    </div>

<div class="container-fluid">
    <div class="row flex-nowrap">
        <div id="image" class="col-auto col-md-4 col-xl-2  px-0">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item">
                        <a class="ei" href="{{ asset('juegos') }}" class="nav-link align-middle px-0">
                            <i class="fs-4 bi-house"></i><span class="ms-1 d-none d-sm-inline">Inicio</span>
                        </a>
                    </li>
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                      <div class="accordion-item">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            Juegos
                          </button>                        
                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body">
                            <a class="ei" href="">El ahorcado</a>
                            <a class="ei" href="">El snake</a>
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            Ejercicios
                          </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body">
                            <a class="ei" href="">Calculadora</a>
                            <a class="ei" href="">Ejercicio 1</a>
                            <a class="ei" href="">Ejercicio 2</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <p>
                      <button class="btn btn-success" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" aria-expanded="false" aria-controls="collapseWidthExample">
                        <i class="bi bi-alarm-fill"></i>
                      </button>
                    </p>
                    <div>
                      <div class="collapse collapse-vertical" id="collapseWidthExample">
                        <div class="card card-body">
                          <div class="relog">
                            <style type="text/css">
                                .body{
                                    background-image: url(https://i.pinimg.com/originals/9a/57/2d/9a572d48d75a8aa532bd2116e4b27e67.gif);
                                    background-repeat: no-repeat;
                                    background-size: 100% 100%;
                                    width: 250px;
                                    align-content: center;
                                    padding: 10px;
                                }
                          </style>
                            <div class="body">
                            <script type="text/javascript">
                            windows.requestAnimationFrame=windows.requestAnimationFrame ||
                                
                            windows.mozRequestAnimationFrame ||
                                
                            windows.webkitRequestAnimationFrame ||
                            
                            windows.oRequestAnimationFrame;
                        
                            var globalID
                            var i=60
                            var inicioCronometro
                            
                            //EJERCICIO 1
                            
                           function ejer1()
                                            {
                                                cancelAnimationFrame(globalID);
                                                clearInterval(inicioCronometro);
                                                horas.style.backgroundColor="Blue";
                                                minutos.style.backgroundColor="Blue";
                                                segundos.style.backgroundColor="Blue";
                                                mensaje=document.getElementById('mensaje');
                                                mensaje.style.color="green";
                                                mensaje.innerHTML="Buen Dia";
                                                reloj()
                                              }
                           function reloj()
                                    {
                                        data()
                                        var t = setInterval(function(){reloj()},500);
                                        
                                    }
                            //***** FIN EJERCICIO 1
                            // EJERCICIO 2
                            
                                        function ejer2()
                                        {
                                                clearInterval(reloj);
                                                clearInterval(inicioCronometro);
                                                horas.style.backgroundColor="Yellow";
                                                minutos.style.backgroundColor="Yellow";
                                                segundos.style.backgroundColor="Yellow";
                                                mensaje=document.getElementById('mensaje');
                                                mensaje.style.color="orange";
                                                mensaje.innerHTML="Squere";
                                                reloj2()        
                                        }
                                        
                            function reloj2()
                                            {
                                                data()
                                                globalID=requestAnimationFrame(reloj2);
                                            }
                            //FIN EJERCICIO 2
                            
                            //EJERCICIO 3
                            function inicio()
                                            {
                                                inicioCronometro=setinterval(cronometro,1000);
                                            }
                             function cronometro()
                             {
                                 i--
                                 mensaje=document.getElementById('mensaje');
                                 mensaje.style.color="white";
                                 mensaje.innerHTML="Bienvenido";
                                 document.getElementById('horas');
                                 document.getElementById('minutos');
                                 document.getElementById('segundos');
                                 
                                 horas.innerHTML="00";
                                        if  (i<60);
                                        {
                                            minutos.innerHTML="00"
                                        }
                                        
                                        if(i==0){resetCronometro()  }
                                     i= actualizarHora(i);
                                     segundos.innerHTML=i;
                             }
                             
                             function resetCronometro()
                                    {
                                        clearInterval(inicioCronometro);
                                        mensaje.innerHTML="Tu tiempo a terminado";
                                        horas.innerHTML="00";
                                        minutos.innerHTML="00";
                                        segundos.innerHTML="00";
                                    }
                              //****FIN EJERCICIO 3
                              //************************************
                              //Datos para los tres ejercicios
                              function data()
                                        {
                                            var hoy=new Date();
                                            var h=hoy.getHours();
                                            var m=hoy.getMinutes();
                                            var s=hoy.getSeconds();
                                            h = actualizarHora(h);
                                            m = actualizarHora(m);
                                            s = actualizarHora(s);
                                            
                                            horas=document.getElementById('horas')
                                            minutos=document.getElementById('minutos')
                                            segundos=document.getElementById('segundos')
                                            
                                            horas.innerHTML = h;
                                            minutos.innerHTML = m;
                                            segundos.innerHTML = s;
                                        }
                                          
                              //Actualizar horapara los tres ejercicios
                              function actualizarHora(i)
                                        {
                                            if (i<10) {i="0" + i};  //Añadir el cero en números menores de 10
                                            
                                            return i;
                                        }
                                 
                                 //******************* FIN TEMA **********************//
                                 </script>
                                 
                                 
                                 <style type="text/css">
                                  #cabecera{
                                    text-align:center;
                                    width: 100%;
                                    padding-right: 2px;
                                    }
                                  .dial,#mensaje{
                                             font-size: 10px;
                                             width: 100px;
                                             display: inline;
                                             font-family: "Arial";
                                            text-shadow: 0 1px 20px #ccc, 
                                           0 2px 0 #c9c9c9,
                                           0 3px 0 #bbb,
                                           0 4px 0 #b9b9b9,
                                           0 5px 0 #aaa,
                                           0 6px 1px rgba(27, 9, 187, 0.733),
                                           0 0 5px rgba(89, 185, 9, 0.774),
                                           0 1px 3px rgba(10, 95, 175, 0.767),
                                           0 3px 5px rgba(26, 13, 150, 0.582),
                                           0 5px 10px rgba(145, 0, 0, 0.616),
                                           0 10px 10px rgba(175, 14, 108, 0.637),
                                           0 20px 20px rgba(172, 26, 26, 0.664);
                                            color: rgb(22, 197, 124);
                        
                                  }
                                  #horas, #minutos, #segundos
                                            {
                                              box-shadow: 3px 3px 8px green;
                                              background-color:blueviolet;
                                              border-radius: 5px;
                                              float:left;
                                              font-size: 30px;
                                              padding:2px;
                                              margin-bottom:5px;
                                            }
                                     #puntos1, #puntos2
                                     {
                                            color:orange;
                                            font-size: 30px;
                                            float:left;
                                            display: inline;
                                            animation: blink-animation 1s steps(5, start) infinite;
                                            -webkit-animation: blink-animation 1s steps(5, start)
                                   infinite;
                                                        }
                                   .boton
                                   {
                                       clear:both;
                                       border:outset grey 2px;
                                       width:50px;
                                       padding: 3px;
                                       color: wheat;
                                       border-radius:20px ;
                                       box-shadow:2px 2px 2px 2px #a1098db0;
                                       text-align:center;
                                       background-color:#2411d1;
                                       font-size:15px;
                                       margin-top: 6px;    
                                       margin-bottom:5px;
                                       float:center;
                                       margin-left:30px;
                                    }
                                .boton:hover {
                                                            border:inset 2px rgb(25, 135, 168);
                                                            box-shadow:3px 3px 2px 2px #d620cd
                                 ;
                                                                
                                                            color: white;
                                                                 }
                                                                 
                             @keyframes blink-animation{
                                to{
                               visibility: hidden;
                               }
                              }
                             @-webkit-keyframes blink-animation{
                               to{
                                  visibility: hidden;
                                }
                             }
                            </style>
                            </head>
                        <body onload="inicio()">
                            <div id="cabecera">
                            </div>
                                <div class="dial">
                                    <div id ="horas">00</div>
                                    <div id="puntos1">:</div>
                                    <div id ="minutos" >00</div>
                                    <div id="puntos2">:</div>
                                    <div id ="segundos" >00 </div>
                                 </div>
                            <div class="boton" onclick="ejer1()"><i class="bi bi-align-bottom"></i></div>
                            <div class="boton" onclick="ejer2()"><i class="bi bi-align-top"></i></div>
                            <div id="mensaje"></div>
                        </div>
                        </div>  
                        </div>
                      </div>
                      <p>
                        <button class="btn btn-success" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" aria-expanded="false" aria-controls="collapseWidthExample">
                          <i class="bi bi-calendar-fill"></i>
                        </button>
                      </p>
                      <div>
                        <div class="collapse collapse-horizontal" id="collapseWidthExample">
                          <div class="card card-body">
                            <div class="calendario">
                              <SCRIPT language="JavaScript1.2" > 
                                     var objWindowPadre
                                     objWindowPadre = window.parent;
                                    var intActivo=0;
                                    var anchoTD=15;
                                    var anchoTD1=18;
                                    var colorHead="red";
                                    var colorTabla="aquamarine";
                                    var colorBorde="black";
                                 
                                    var time = new Date();
                                    var anno=time.getFullYear();
                                    var mes=time.getMonth()+1;
                                    var dia=time.getDate()
                                    var aDias=new Array(0,31,28,31,30,31,30,31,31,30,31,30,31);
                                 
                                    function padl(n, w, c) {
                                     n = String(n);
                                     while (n.length < w)
                                         n = c + n;
                                     return n;
                                 }
                                 
                                 
                                    //funcion que se ejecuta al cargar el formulario
                                    function iniciar(){
                                    
                                        if (anoBisiesto(anno))
                                     {
                                         aDias[2]=29;
                                     }
                                     else
                                     {
                                         aDias[2]=28;
                                     }
                                     escribeTablaMes(dia,mes,anno);
                                    }
                                    //cuando pinchamos sobre el calendario
                                    function pinchar(evento){
                                     //primer dia de la semana
                                     var oTR = null;
                                     if (window.event)
                                         oTR = window.event.srcElement;
                                     else
                                         oTR = evento.currentTarget;
                                     var sFechaSel=oTR.id.substring(2);
                                     //Recupero las variables de la URL
                                     var urlEnd = document.URL.indexOf('?');
                                     var values = new Array();
                                     var names;  
                                     if (urlEnd != -1){
                                         var params = document.URL.substring(urlEnd+1, document.URL.length).split('&');
                                         for(i=0; i<params.length; i++) {
                                         names = params[i].split('=');
                                         values[names[0]] = names[1];
                                         }
                                     }
                                     var name = unescape(values["textBox"]);
                                     window.opener.setFecha(sFechaSel);
                                     if (window.opener.document.forms[0] != null) {
                                         
                                     }
                                     top.window.close();
                                    }
                                 
                                    //Retorna el nombre del mes
                                    function getNombreMes(iMes){
                                     var sMes=""
                                     switch(iMes){
                                      case 1:
                                       sMes="Enero";
                                       break;
                                      case 2:
                                       sMes="Febrero";
                                       break;
                                      case 3:
                                       sMes="Marzo";
                                       break;
                                      case 4:
                                       sMes="Abril";
                                       break;
                                      case 5:
                                       sMes="Mayo";
                                       break;
                                      case 6:
                                       sMes="Junio";
                                       break;
                                      case 7:
                                       sMes="Julio";
                                       break;
                                      case 8:
                                       sMes="Agosto";
                                       break;
                                      case 9:
                                       sMes="Septiembre";
                                       break;
                                      case 10:
                                       sMes="Octubre";
                                       break;
                                      case 11:
                                       sMes="Noviembre";
                                       break;
                                      case 12:
                                       sMes="Diciembre";
                                       break;
                                      default:
                                       sMes="";
                                     }
                                     return sMes;
                                    }
                                 
                                 
                                    //Retorna true si el año es bisiesto y false en caso contrario
                                    function anoBisiesto(sAno){
                                      var iAno=parseInt(sAno);
                                     if(iAno%4 != 0)
                                         return false;
                                     else{
                                         if (iAno%400==0)
                                             return true;
                                         else
                                             if (iAno%100==0)
                                                 return false;
                                             else
                                                 return true;
                                     }
                                    }
                                 
                                    //Retorna 1: lunes; 2 Martes ...
                                    function getDayNumber(dia,mes,anno){
                                     var day1=new Date(anno,mes-1,dia)
                                     var nDay = day1.getDay();
                                     if (nDay==0) nDay=7;
                                     return nDay;
                                    }
                                     
                                     function cambiarFondo (evento)
                                     {
                                         if (window.event) {
                                             var objTR =window.event.srcElement;
                                             if (objTR.style.backgroundColor != '#3AE774')
                                             {
                                             
                                                 objTR.style.backgroundColor = '#cbdced'
                                             }
                                             else
                                             {
                                                 objTR.style.backgroundColor = '#ffffff'
                                             }
                                             if (objTR.style.cursor != 'hand')
                                             {
                                             
                                                 objTR.style.cursor = 'hand'
                                             }
                                             else
                                             {
                                                 objTR.style.cursor= 'default'
                                             }
                                         }
                                     }   
                                 
                                    //Escribe los numeros de los dias:
                                    //  -  - 1  2  3  4  5
                                    //  6  7 8  9 10 11 12 ...
                                    function escribeTablaMes(dia,mes,anno){
                                    
                                     var clasedia=""
                                     var icDia=1;
                                     var iIniSemana=1;
                                     
                                     //obtengo el dia de la semana del 1 del mes a dibujar
                                     var iDay=getDayNumber(1,mes,anno);
                                     
                                     //Borramos la los dias del calendario
                                     var j = 0
                                     while(j<=intActivo)
                                     {
                                         document.getElementById("tablacalendario").deleteRow(0);		
                                         j++;
                                     }
                                     intActivo = -1
                                     while((icDia-iDay+1)<=aDias[mes])
                                     {
                                         // A <TR> le daremos el nombre del primer dia de la semana
                                         // si es el primer dia del mes sera 1; en cualquier otro caso sera Lunes
                                         var sNameTD=""
                                         intActivo++
                                         objTR = document.getElementById("tablacalendario").insertRow(intActivo);
                                         objTR.id =intActivo; 
                                         objTR.align= 'center';
                                         for(;icDia<iIniSemana+7 ;icDia++)
                                         {
                                         sNameTD="TD"+padl((icDia-iDay+1),2,"0")+"/"+padl(mes,2,"0")+"/"+anno;
                                         if( (icDia>=iDay) && ((icDia-iDay+1)<=aDias[mes]))
                                         {
                                             if (icDia < iIniSemana+5)//Si es dia de la semana
                                             {
                                                 clasedia="textocalendario"
                                             }
                                             else
                                             {
                                                 clasedia="textofestivo"
                                             }
                                             objTD = objTR.insertCell(objTR.cells.length);
                                             objTD.id = sNameTD;	
                                             objTD.style.backgroundColor='#ffffff';
                                             objTD.style.width=anchoTD;
                                             objTD.className=clasedia;
                                             objTD.onclick=pinchar;
                                             objTD.onmouseover=cambiarFondo;
                                             objTD.onmouseout=cambiarFondo;	
                                             objTD.innerHTML = (icDia-iDay+1);		
                                         }
                                         else
                                         {
                                             objTD = objTR.insertCell(objTR.cells.length);
                                             objTD.id = sNameTD;	
                                             objTD.style.width=anchoTD;		
                                             objTD.innerHTML = ' ';			
                                         }
                                     
                                      }
                                     
                                      iIniSemana=icDia;
                                     }//fin de  while((icDia-iDay+1)<=aDias[mes])
                                     document.forms[0].cbMes.focus()
                                    }
                                 
                                 
                                    //funcion que redibuja el calendario con el mes y año seleccionado
                                    function cambiaCalendario(){
                                     if (anoBisiesto(document.forms[0].cbAnno[document.forms[0].cbAnno.selectedIndex].value))
                                     { aDias[2]=29;}
                                     else
                                     { aDias[2]=28;}
                                     escribeTablaMes(1,document.forms[0].cbMes[document.forms[0].cbMes.selectedIndex].value,document.forms[0].cbAnno[document.forms[0].cbAnno.selectedIndex].value); 
                                    }
                                 
                                   </SCRIPT>
                                 <TABLE class="table" border="0" cellspacing=0 width="172px">
                                 <TR><TD align="center">
                                  <CENTER>
                                    <FORM name="frmCalendario_sup">
                                     <SELECT name="cbMes" class=textocalendario onchange="cambiaCalendario()">
                                     <SCRIPT>
                                      for(var i=1;i<=12;i++){
                                       var strSelected="";
                                       if(i==mes) strSelected="SELECTED"
                                       document.write("<OPTION value="+i+" "+strSelected+">"+getNombreMes(i));
                                      }
                                     </SCRIPT>
                                     </SELECT>
                                     <SELECT name="cbAnno" class=textocalendario onchange="cambiaCalendario()">    
                                     <SCRIPT>
                                      for(var i=anno-100;i<=anno+10;i++){
                                       var strSelected="";
                                       if(i==anno) strSelected="SELECTED"
                                       document.write("<OPTION value="+i+" "+strSelected+">"+i);
                                      }
                                     </SCRIPT>
                                 
                                     </SELECT>
                                 </FORM>
                                 <TABLE class="table" border="1" borderColor=red cellpading=0 cellspacing=0>
                                 <TR><TD>
                                     <TABLE class="table" class="cabeza" cellpading=3 cellspacing=14 border=0>
                                     <TR align='center'>
                                     <TD class=diascalendario style='width:15'> L</TD>
                                     <TD class=diascalendario style='width:15'> M</TD>
                                     <TD class=diascalendario style='width:15'> X</TD>
                                 
                                     <TD class=diascalendario style='width:15'> J</TD>
                                     <TD class=diascalendario style='width:15'> V</TD>
                                     <TD class=diasfestivo style='width:15'><b> S</b></TD>
                                     <TD class=diasfestivo style='width:15'><b> D</b></TD>
                                     </TR>
                                     </TABLE>   
                                  </TD></TR>
                                 
                                  <TR><TD>
                                     <TABLE class="table" bgColor='white' id="tablacalendario" cellpading=1 cellspacing=1>
                                     <tr><td>
                                     </td></tr>
                                     </TABLE>  
                                  </TD></TR>
                                  </TABLE>
                                   </TD></TR>
                                  </TABLE>    
                                  </BODY>
                          </div>
                          </div>
                        </div>
                      </div>
                    </div>                      
                </ul>
                <hr>
                <div class="dropdown pb-4">
                    </ul>
                </div>
            </div>
        </div>
        <div class="col py-3">
          <style>
            .card{
              background-color: none;
              padding: 3px;
            }
            footer{
              padding: 10PX;
              background-image: url(https://us.123rf.com/450wm/mikado767/mikado7671511/mikado767151100152/47622152-abstract-infograf%C3%ADa-horizontales-rayas-gradiente-arco-iris-de-recortes-en-el-fondo-blanco-rgb-eps-10.jpg);
              background-repeat: no-repeat;
              background-size: 100%; 
            }
            .g{
              display: inline;
              margin-left: 30px;
            }
            .t{
              width: 40%;
              display: inline;
              margin-left: 100px;
            }
            .t a{
              display: inline-flex;
              text-decoration: none;
              color: white;
              float: right;
              padding: 5px;
              padding-right: 20px;
            }
            .t a i{
              margin-right: 5px;
            }
          </style>
    @yield('cuerpo')
    <footer>
      <div class="g">
      <!-- Button trigger modal -->
      <button id="btn" type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
       Contacto
      </button>
      </div>
      <div class="t">
        <a href="mailto:dilberthvalqui@gmail.com"><i class="bi bi-envelope-at-fill"></i><b>dilberthvalqui@gmail.com</b></a>
        <a href="mailto:dantenmiguel.2k@gmail.com"><i class="bi bi-envelope-at-fill"></i><b>dantenmiguel.2k@gmail.com</b></a>
      </div>
<form action="{{ asset('contacto') }}" method="post" >
  @csrf
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h5 class="modal-title text-light" id="staticBackdropLabel"><i class="bi bi-person-rolodex"> </i> Crear Contacto</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <label for="">Numero</label>
        <input class="form-control" type="text" name="numero">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal"><i class="bi bi-x-square-fill"> </i> Cancelar</button>
        <button type="submit" class="btn btn-primary"><i class="bi bi-save-fill"> </i>Guardar</button>
      </div>
    </div>
  </div>
</div>
</form>
    </footer>
  <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
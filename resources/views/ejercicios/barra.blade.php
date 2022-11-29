@extends('layout.base')
@section('titulo', 'Barra de Estado')
@section('cuerpo')
    <TITLE>Ejemplo 10</TITLE>
    <link rel="shortcut icon" href="https://cdn.pixabay.com/photo/2021/03/27/06/31/code-6127616_960_720.png" type="image/png">
    <HEAD>
        <SCRIPT LANGUAGE="JavaScript">
        var timed = 0;
        var scrollGo = false; 
        var delay=100;
        var space=100;
        function scroll_start(){
        var i=0;
        msg="Éste es el mensaje mostrado en la barra de estado";
        for (i=0; i<space; i++)
        msg=" "+msg; 
        scrollGo=true;
        timerid=window.setTimeout("scrollmsg(0)", delay);
        }
        function scrollmsg(pos){
        var out = "";
        scrollGo=false;
        if (pos < msg.length)
        self.status = msg.substring(pos, msg.length);
        else
        pos=-100; 
        ++pos;
        scrollGo=true;
        timerid=window.setTimeout("scrollmsg("+post+")", delay);
        }
        </SCRIPT>
        </HEAD>
        <BODY onLoad="scroll_start();">
        </BODY>
@endsection
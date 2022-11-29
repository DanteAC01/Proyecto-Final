@extends('layout.base')
@section('title', 'Correo')
@section('cuerpo')
<html>
    <link rel="shortcut icon" href="https://cdn.pixabay.com/photo/2021/03/27/06/31/code-6127616_960_720.png" type="image/png">
    <body class="cuerpo">

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
        background-size: 100%;
        background-repeat: no-repeat;
    }
</style>
</body>
</html>
<br><br><br><br><br><br><br><br><br><br><br><br><br>
@endsection
@extends('layout.base')
@section('titulo', 'Nombre')
@section('cuerpo')
        <link rel="shortcut icon" href="https://cdn.pixabay.com/photo/2021/03/27/06/31/code-6127616_960_720.png" type="image/png">
    </head>
    <script language="JavaScript">
        //Recoger datos
        var nom;
        nom=prompt("esribe tu nombre", "NOMBRE");
        alert("Hola "+ nom);
    </script>
    <style>
        body{
            background-image: url('https://logos.flamingtext.com/Word-Logos/nombre-design-fluffy-name.png');
            background-repeat: no-repeat;
            background-size: 100%;
            margin: auto;
        }
    </style>
@endsection
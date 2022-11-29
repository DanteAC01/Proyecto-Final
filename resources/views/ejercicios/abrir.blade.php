@extends('layout.base')
@section('titulo', 'Abrir Pagina')
@section('cuerpo')
    <link rel="shortcut icon" href="https://cdn.pixabay.com/photo/2021/03/27/06/31/code-6127616_960_720.png" type="image/png">
    <!--Abrir una ventana pop-up cada cierto tiempo-->
    <head>
        <script>
            function abrir_ventana()
            {
                window.open("https://www.youtube.com/");
            }
            function parar_abrir()
            {
                clearTimeout(pop);
            }
            pop = setInterval ("abrir_ventana()",3000);
        </script>
    </head>
    <body>
        <header>
            <div>
                <marquee behavior="scroll" direction="left" scrollamount="30" ><p>Bienvenidos A Un Nuevo Amanecer<img src="https://www.transparentpng.com/thumb/smile/gGsgum-emoji-feliz-png-emoticon-smile-clipart-full-size.png" alt="S/In."></p></marquee>
            </div>
        </header>
@endsection
@extends('layout.base')
@section('titulo', 'Elegir Imagen')
@section('cuerpo')
    <link rel="shortcut icon" href="https://cdn.pixabay.com/photo/2021/03/27/06/31/code-6127616_960_720.png" type="image/png">
    <head>
        <center>
        <script language="javascript">
            //Ejemplo de muestra de galeria de imagenes
            function ver_imagen(){
                if (!document.images)
                return
                document.images.img.src=
                document.imagenes.imagen.options[document.imagenes.imagen.selectedIndex].value
            }
        </script>
        <body>
            <form name="imagenes">
                <select name="imagen" size="1" onchange="ver_imagen()">
                <option>Elige imagen</option>
                <option value="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__480.jpg">Arbol</option>
                <option value="https://s1.1zoom.me/big3/471/Painting_Art_Back_view_Photographer_575380_3840x2400.jpg">Pintura</option>
                <option value="https://www.rdstation.com/blog/wp-content/uploads/sites/2/2017/09/thestocks.jpg">Foco</option>
                </select>
            </form>
            <img src="https://empresas.blogthinkbig.com/wp-content/uploads/2019/11/Imagen3-245003649.jpg?w=800" name="img" width="600" height="436" border="3">
        </center>
        </body>
    </head>
    <br><br><br><br>
@endsection
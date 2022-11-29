@extends('layout.base')
@section('title', 'Imprimir')
@section('cuerpo')
<link rel="shortcut icon" href="https://cdn.pixabay.com/photo/2021/03/27/06/31/code-6127616_960_720.png" type="image/png">
<!-- Imprimir un documento -->
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
@endsection
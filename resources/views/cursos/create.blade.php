@extends('layouts.plantilla')

@section('title','cursos create')

@section('content')
    <h1>Esta pagina podras crear un curso</h1>
    <form action="#" method="POST">
        <label for="nombre">Nombre: </label><br>
        <input type="text" id="nombre">

        <br>
        <label for="descripcion">Descripcion: </label><br>
        <textarea name="descripcion"  rows="10"></textarea>
        <br>
        
        <label for="categoria">Categoria:</label><br>
        <input type="text" name="categoria">

    </form>
@endsection



@extends('layouts.plantilla')

@section('title','cursos create')

@section('content')
    <h1>Esta pagina podras crear un curso</h1>

    <form action="{{ route('cursos.store') }}" method="POST">

        @csrf
        <label for="name">Nombre: </label><br>
        <input type="text" name="name">
        @error('name')
            <br>
            <small>*{{ $message }}</small>
            <br>
        @enderror

        <br>
        <label for="descripcion">Descripcion: </label><br>
        <textarea name="descripcion"  rows="10"></textarea>
        @error('descripcion')
            <br>
            <small>*{{ $message }}</small>
            <br>
        @enderror

        <br>

        <label for="categoria">Categoria:</label><br>
        <input type="text" name="categoria">
        @error('categoria')
            <br>
            <small>*{{ $message }}</small>
            <br>
        @enderror

        <br>
        <input type="submit" value="Enviar Formulario">



    </form>
@endsection



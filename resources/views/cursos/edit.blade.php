@extends('layouts.plantilla')

@section('title','cursos edit')

@section('content')
    <h1>Esta pagina podras editar un curso</h1>

    <form action="{{ route('cursos.update', $cursos)}}" method="post">

        @csrf

        @method('put')
        
        <label for="name">Nombre: </label><br>
        <input type="text" name="name" value="{{ $cursos->name }}">

        <br>
        <label for="descripcion">Descripcion: </label><br>
        <textarea name="descripcion"  rows="10" >{{ $cursos->descripcion }}</textarea>
        <br>

        <label for="categoria">Categoria:</label><br>
        <input type="text" name="categoria" value="{{ $cursos->categoria }}">
        <br>
        <input type="submit" value="Actualizar Formulario" ">

    </form>
@endsection



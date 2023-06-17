@extends('layouts.plantilla')

@section('title','cursos edit')

@section('content')
    <h1>Esta pagina podras editar un curso</h1>

    <form action="{{ route('cursos.update', $cursos)}}" method="post">

        @csrf

        @method('put')

        <label for="name">Nombre: </label><br>
        <input type="text" name="name" value="{{ old('name',$cursos->name)}} ">
        @error('name')
            <br>
            <small>*{{ $message }}</small>
            <br>
        @enderror

        <br>
        <label for="descripcion">Descripcion: </label><br>
        <textarea name="descripcion"  rows="10" > {{ old('descripcion',$cursos->descripcion)}} </textarea>
        @error('descripcion')
            <br>
            <small>*{{ $message }}</small>
            <br>
        @enderror
        <br>

        <label for="categoria">Categoria:</label><br>
        <input type="text" name="categoria" value="{{ old('categoria',$cursos->categoria) }}">
        <br>
        <input type="submit" value="Actualizar Formulario" ">
        @error('categoria')
            <br>
            <small>*{{ $message }}</small>
            <br>
        @enderror
        <br>

    </form>
@endsection



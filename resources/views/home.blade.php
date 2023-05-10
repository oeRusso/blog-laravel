@extends('layouts.plantilla')
{{-- el extends sirve para hacer referencia a la carpeta en la q tenemos la plantilla base --}}

@section('title','HHHome')
{{-- los sections hacen referencia a la marca q deje en la plantilla base osea a los yields, digamos q esta es la forma en la q se llama a los yields en el archivo donde lo quiero utilizar --}}

@section('content')
<h1>Bienvenidos a la pagina principal</h1>
@endsection
{{-- si el section contendra mas de una linea se lo pone con etiqueta de cierre --}}



{{-- TODO: vistas en laravel min 13.21 --}}

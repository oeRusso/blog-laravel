<?php

namespace App\Http\Controllers;

use App\Models\Cursos;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Html\CustomCssFile;

class CursoController extends Controller
{

    public function index(){


        $cursos = Cursos::orderby('id','desc')->paginate();


        return view('cursos.index',compact('cursos')); //dentro de compact le paso la variable de arriba sin el simbolo de dolar, y con esta funcion compact me permite usar esas variable que le pase en la vista
    }

    public function create(){

        return view('cursos.create');
    }

    public function store(Request $request){
        $cursos = new Cursos();


        $cursos->name = $request->name;
        $cursos->descripcion = $request->descripcion;
        $cursos->categoria = $request->categoria;

        $cursos->save();
        return redirect()->route('cursos.show', $cursos);

    }

    public function show($id){
        $curso = Cursos::find($id);

        return view('cursos.show',compact('curso')); //compact sirve cuando coincide el nombre de la variable del metodo con el nombre q va recibir la vista

    }

    public function edit($id){

        return "aca se editan los cursos";

    }
}




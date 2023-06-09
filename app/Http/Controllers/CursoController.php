<?php

namespace App\Http\Controllers;

use App\Models\Cursos;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;
use SebastianBergmann\CodeCoverage\Report\Html\CustomCssFile;
use App\Http\Requests\StoreCurso;

class CursoController extends Controller
{

    public function index(){


        $cursos = Cursos::orderby('id','desc')->paginate();


        return view('cursos.index',compact('cursos')); //dentro de compact le paso la variable de arriba sin el simbolo de dolar, y con esta funcion compact me permite usar esas variable que le pase en la vista
    }

    public function create(){

        return view('cursos.create');
    }

    public function store(StoreCurso $request){

    /*  $cursos = new Cursos();
        $cursos->name = $request->name;
        $cursos->descripcion = $request->descripcion;
        $cursos->categoria = $request->categoria;

        $cursos->save();
        return redirect()->route('cursos.show', $cursos); */
        return $request->all();

        $cursos = Cursos::create($request->all());

    }

    public function show($cursos){
        $curso = Cursos::find($cursos);

        return view('cursos.show',compact('curso')); //compact sirve cuando coincide el nombre de la variable del metodo con el nombre q va recibir la vista

    }

    public function edit(Cursos $cursos){

        return view('cursos.edit',compact('cursos'));

    }

    public function update(Request $request,Cursos $cursos){

        $request->validate([
            'name' => 'required',
            'descripcion' => 'required',
            'categoria' => 'required',
        ]);

        $cursos->name = $request->name;
        $cursos->descripcion = $request->descripcion;
        $cursos->categoria = $request->categoria;


        $cursos->save();
        return redirect()->route('cursos.show', $cursos);


    }
}




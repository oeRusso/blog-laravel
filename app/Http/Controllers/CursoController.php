<?php

namespace App\Http\Controllers;

use App\Models\Cursos;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Html\CustomCssFile;

class CursoController extends Controller
{

    public function index(){


        $cursos = Cursos::paginate();


        return view('cursos.index',compact('cursos')); //dentro de compact le paso la variable de arriba sin el sombolo de dolar, y con esta funcion compact me permite usar esas variable que le pase en la vista
    }

    public function create(){

        return view('cursos.create');
    }

    public function show($id){
        $curso = Cursos::find($id);

        return view('cursos.show',compact('curso')); //compact sirve cuando coincide el nombre de la variable del metodo con el nombre q va recibir la vista

        // return view('cursos.show',['curso'=>$curso]);
    }
}




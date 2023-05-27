<?php

use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', HomeController::class);

Route::get('cursos', [CursoController::class, 'index'])->name('cursos.index');

Route::get('cursos/create', [CursoController::class, 'create'])->name('cursos.create');

Route::post('cursos', [CursoController::class, 'store'])->name('cursos.store'); //para guardar

Route::get('cursos/{cursos}', [CursoController::class, 'show'])->name('cursos.show');

Route::get('cursos/{cursos}/edit', [CursoController::class, 'edit'])->name('cursos.edit');

Route::put('cursos/{cursos}', [CursoController::class, 'update'])->name('cursos.update');







/*================================================================================================
Esta manera es correcta cuando trabajamos con muchas rutas para un solo controlador, pero lo voy a
hacer como lo hace el tutorial
================================================================================================*/

// Route::controller(CursoController::class)->group(function () {
//     Route::get('cursos','index')->name('cursos.index');

//     Route::get('cursos/create', 'create')->name('cursos.create');

//     Route::get('cursos/{id}','show')->name('cursos.show');
// });




// Route::get('cursos/{curso}/{categoria?}', function ($curso,$categoria = null) {

//     if ($categoria) {

//         return "Bienvenido al curso $curso, de la categoria $categoria";
//     }else{
//             return "Bienvenido al curso: $curso";

//     }
// });


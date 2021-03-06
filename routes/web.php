<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    //return view('welcome');
    return view('aplicacion/home/index');
});

//Pudo ser UsuarioDocente, ya que van a usar los métodos NO abstractos del la clase padre UsuarioController
Route::resource('usuario', 'Strategy\UsuarioDecano');
//Route::resource('aplicacion/usuario', 'UsuarioController'); Reemplazo porque ahora es abstracta
Route::get('login', 'MyLoginController@showLoginForm');
Route::post('login', 'MyLoginController@login')->name('login');
Route::post('logout', 'MyLoginController@logout')->name('logout');
Route::get('nologin', 'DashBoardController@index')->name('nologin');
Route::get('dashboard', 'MyLoginController@dashboard')->name('dashboard');
Route::resource('rol', 'RolController');
Route::resource('programa', 'ProgramaController');
Route::resource('curso', 'CursoController');
Route::get('prerequisitos', 'CursoController@getPrerequisitos');
Route::get('crear_competencia', 'CursoController@crearCompetencia');
Route::get('eliminar_competencia', 'CursoController@eliminarCompetencia');
Route::get('get_competencias', 'CursoController@getCompetencias');
Route::get('reportes', 'CursoController@crearReportes');
Route::get('reportes/cursos', 'CursoController@getCursosReportes');
Route::get('reportes/programas', 'CursoController@getProgramasReportes');
Route::get('reportes/get_data', 'CursoController@getDataReportes');




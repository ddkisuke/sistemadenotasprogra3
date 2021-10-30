<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

Route::get('alumnos/pdf', [App\Http\Controllers\AlumnoController::class, 'pdf'])->name('alumnos.pdf');



route::resource('alumnos', App\Http\Controllers\AlumnoController::class)->middleware('auth');
route::resource('docentes', App\Http\Controllers\DocenteController::class)->middleware('auth');
route::resource('cursos', App\Http\Controllers\CursoController::class)->middleware('auth');
route::resource('notas', App\Http\Controllers\NotaController::class)->middleware('auth');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

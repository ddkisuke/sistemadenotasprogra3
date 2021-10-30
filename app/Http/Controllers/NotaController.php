<?php

namespace App\Http\Controllers;

use App\Models\Nota;
use App\Models\Docente;
use App\Models\Alumno;
use App\Models\Curso;
use Illuminate\Http\Request;
use PDF;

/**
 * Class NotaController
 * @package App\Http\Controllers
 */
class NotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notas = Nota::paginate();

        return view('nota.index', compact('notas'))
            ->with('i', (request()->input('page', 1) - 1) * $notas->perPage());
    }

    public function pdf()
    {
        $notas = nota::paginate();

        $pdf = PDF::loadview('nota.pdf',['notas'=>$notas]);
        //$pdf->loadHTML('<h1>Test</h1>');
        return $pdf->stream();

        //return view('alumno.pdf', compact('notas$notas$notas'));

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $nota = new Nota();
        $docentes=docente::pluck('nombre','id');
        $cursos=curso::pluck('nombrecurso','id');
        $alumnos=alumno::pluck('nombre','id');
        return view('nota.create', compact('nota','docentes','cursos','alumnos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Nota::$rules);

        $nota = Nota::create($request->all());

        return redirect()->route('notas.index')
            ->with('success', 'Nota created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $nota = Nota::find($id);

        return view('nota.show', compact('nota'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $nota = Nota::find($id);
        $docentes=docente::pluck('nombre','id');
        $cursos=curso::pluck('nombrecurso','id');
        $alumnos=alumno::pluck('nombre','id');

        return view('nota.edit', compact('nota','docentes','cursos','alumnos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Nota $nota
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nota $nota)
    {
        request()->validate(Nota::$rules);

        $nota->update($request->all());

        return redirect()->route('notas.index')
            ->with('success', 'Nota updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $nota = Nota::find($id)->delete();

        return redirect()->route('notas.index')
            ->with('success', 'Nota deleted successfully');
    }
}

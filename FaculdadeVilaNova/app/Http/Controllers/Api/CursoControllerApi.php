<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateCursoRequest;
use App\Http\Resources\CursoCollection;
use App\Http\Resources\CursoResource;
use App\Models\Curso;

class CursoControllerApi extends Controller
{
    protected $view = 'curso';
    protected $route = 'cursos';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cads = Curso::all();
        return new CursoCollection($cads);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\StoreUpdateCursoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUpdateCursoRequest $request)
    {
        $cad = Curso::create($request->all());

        return new CursoResource($cad);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Curso  $aluno
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cad = Curso::findOrFail($id);

        return new CursoResource($cad);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\UpdateCursoRequest  $request
     * @param  \App\Models\Curso  $aluno
     * @return \Illuminate\Http\Response
     */
    public function update(StoreUpdateCursoRequest $request, $id)
    {
        $cad = Curso::findOrFail($id);
        $cad->update($request->all());
        $id = $cad->id;

        return new CursoResource($cad);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Curso  $aluno
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cad = Curso::findOrFail($id);
        $cad->delete();

        return new CursoResource($cad);
    }
}

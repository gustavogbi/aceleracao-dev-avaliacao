<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CursoRequest;
use App\Http\Resources\CursoCollection;
use App\Http\Resources\CursoResource;
use App\Models\Curso;

class CursoControllerApi extends Controller
{
    protected $view = 'curso';
    protected $route = 'cursos';

    public function index()
    {
        $cads = Curso::all();
        return new CursoCollection($cads);
    }

    public function store(CursoRequest $request)
    {
        $cad = Curso::create($request->all());

        return new CursoResource($cad);
    }

    public function show($id)
    {
        $cad = Curso::findOrFail($id);

        return new CursoResource($cad);
    }

    public function update(CursoRequest $request, $id)
    {
        $cad = Curso::findOrFail($id);
        $cad->update($request->all());
        $id = $cad->id;

        return new CursoResource($cad);
    }

    public function destroy($id)
    {
        $cad = Curso::findOrFail($id);
        $cad->delete();

        return new CursoResource($cad);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Http\Requests\StoreUpdateCursoRequest;

class CursoController extends Controller
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
        return view($this->view . '.index', compact('cads'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view($this->view . '.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\StoreUpdateCursoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUpdateCursoRequest $request)
    {
        Curso::create($request->all());

        return redirect()->route($this->route . '.index')->with('success', "Cadastrado efetivado com sucesso!");
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

        return view($this->view . '.show', compact('cad'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Curso  $aluno
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cad = Curso::findOrFail($id);

        return view($this->view . '.edit', compact('cad'));
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

        return redirect()->route($this->route . '.index')->with('success', "Cadastrado atualizado com sucesso!");
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

        return redirect()->route($this->route . '.index')->with('danger', "Cadastro deletado com sucesso");
    }
}

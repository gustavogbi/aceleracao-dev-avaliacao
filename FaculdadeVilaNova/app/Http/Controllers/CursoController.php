<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Http\Requests\CursoRequest;

class CursoController extends Controller
{
    protected $view = 'curso';
    protected $route = 'cursos';

    public function index()
    {
        $cads = Curso::all();
        return view($this->view . '.index', compact('cads'));
    }

    public function create()
    {
        return view($this->view . '.create');
    }

    public function store(CursoRequest $request)
    {
        Curso::create($request->all());

        return redirect()->route($this->route . '.index')->with('success', "Cadastrado efetivado com sucesso!");
    }

    public function show($id)
    {
        $cad = Curso::findOrFail($id);

        return view($this->view . '.show', compact('cad'));
    }

    public function edit($id)
    {
        $cad = Curso::findOrFail($id);

        return view($this->view . '.edit', compact('cad'));
    }

    public function update(CursoRequest $request, $id)
    {
        $cad = Curso::findOrFail($id);
        $cad->update($request->all());
        $id = $cad->id;

        return redirect()->route($this->route . '.index')->with('success', "Cadastrado atualizado com sucesso!");
    }

    public function destroy($id)
    {
        $cad = Curso::findOrFail($id);
        $cad->delete();

        return redirect()->route($this->route . '.index')->with('danger', "Cadastro deletado com sucesso");
    }
}

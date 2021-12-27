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
        $cad = Curso::create($request->all());
        return view($this->view . '.index')->with('success', "Cadastrado efetivado com sucesso!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Curso  $aluno
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cad = Curso::find($id);
        if ($cad) {
            return view($this->view . '.show', compact('cad'));
        }
        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Curso  $aluno
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cad = Curso::find($id);
        if (!$cad) :
            return redirect()->back();
        endif;
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
        $cad = Curso::find($id);
        if (!$cad) :
            return redirect()->back();
        endif;

        $cad->update($request->all());
        $id = $cad->id;
        return view($this->view . '.update', compact('cad'))->with('success', "Cadastrado atualizado com sucesso!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Curso  $aluno
     * @return \Illuminate\Http\Response
     */
    public function destroy(Curso $aluno)
    {
        //
    }
}

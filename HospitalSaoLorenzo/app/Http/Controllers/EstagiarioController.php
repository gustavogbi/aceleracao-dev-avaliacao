<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestEstagiarioInsertUpdate;
use App\Models\Estagiario;
use Illuminate\Http\Request;

class EstagiarioController extends Controller
{
    
    public function index(){
        $estagiarios = Estagiario::all();
        return view('estagiarios.index', compact('estagiarios'));
    }
    public function show($id)
    {
        $estagiario = Estagiario::findOrFail($id);
        return view('estagiarios.show', compact('estagiario'));
    }
    public function create()
    {
        return view('estagiarios.create');
    }
    public function store(RequestEstagiarioInsertUpdate $request)
    {
        $request->validated($request->all());
        Estagiario::create($request->all());
        return redirect()->route('estagiario.index')->with('success', "Cadastro realizado com sucesso!");
    }
    public function edit($id)
    {
        $estagiario = Estagiario::findOrFail($id);
        return view('Estagiarios.edit', compact('estagiario'));
    }
    public function update(RequestEstagiarioInsertUpdate $request, $id)
    {
        $Estagiario = Estagiario::findOrFail($id);
        $Estagiario->update($request->all());
        return redirect()->route('estagiario.index')->with('success', "Cadastro atualizado com sucesso!");
    }
    public function destroy($id)
    {
        $Estagiario = Estagiario::findOrFail($id);
        $Estagiario->delete();
        return redirect()->route('estagiario.index')->with('danger', "Cadastro deletado com sucesso!");
    }

}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestMedicoInsertUpdate;
use App\Models\Medico;
use Illuminate\Http\Request;

class MedicoController extends Controller
{
    public function index(){
        $medicos = Medico::all();
        return view('medicos.index', compact('medicos'));
    }
    public function show($id)
    {
        $medico = Medico::findOrFail($id);
        return view('Medicos.show', compact('medico'));
    }
    public function create()
    {
        return view('Medicos.create');
    }
    public function store(RequestMedicoInsertUpdate $request)
    {
        $request->validated($request->all());
        Medico::create($request->all());
        return redirect()->route('medico.index')->with('mensagem', "Cadastro realizado com sucesso!");
    }
    public function edit($id)
    {
        $medico = Medico::findOrFail($id);
        return view('Medicos.edit', compact('medico'));
    }
    public function update(RequestMedicoInsertUpdate $request, $id)
    {
        $medico = Medico::findOrFail($id);
        $medico->update($request->all());
        return redirect()->route('medico.index')->with('mensagem', "Cadastro atualizado com sucesso!");
    }
    public function destroy($id)
    {
        $medico = Medico::findOrFail($id);
        $medico->delete();
        return redirect()->route('medico.index')->with('mensagem', "Cadastro deletado com sucesso!");
    }


}

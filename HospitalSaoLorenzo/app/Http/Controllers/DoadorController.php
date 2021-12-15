<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateStoreDoadorRequest;
use App\Models\Doador;

class DoadorController extends Controller
{
    public function index()
    {
        $doadores = Doador::all();
        return view('Doadores.index', compact('doadores'));
    }

    public function show($id)
    {
        $doador = Doador::findOrFail($id);
        return view('Doadores.show', compact('doador'));
    }

    public function create()
    {
        return view('Doadores.create');
    }

    public function store(UpdateStoreDoadorRequest $request)
    {
        $doador = Doador::create($request->all());

        if (!$doador) {
            dd($doador);
        }

        return redirect()->route('doador.index')->with('success', "Cadastro efetivado com sucesso!");
    }

    public function edit($id)
    {
        $doador = Doador::findOrFail($id);
        return view('Doadores.edit', compact('doador'));
    }

    public function update(UpdateStoreDoadorRequest $request, $id)
    {
        $doador = Doador::findOrFail($id);
        $doador->update($request->all());
        return redirect()->route('doador.index')->with('success', "Cadastro atualizado com sucesso!");
    }

    public function destroy($id)
    {
        $doador = Doador::findOrFail($id);
        $doador->delete();
        return redirect()->route('doador.index')->with('danger', "Cadastro deletado com sucesso!");
    }
}

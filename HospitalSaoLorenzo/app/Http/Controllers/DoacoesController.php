<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doacoes;
use App\Http\Requests\UpdateStoreDoacoesRequest;

class DoacoesController extends Controller
{

    public function index()
    {
        $doacoes = Doacoes::all();
        return view('Doacoes.index', compact('doacoes'));
    }

    public function show($id)
    {
        $doacao = Doacoes::findOrFail($id);
        return view('Doacoes.show', compact('doacao'));
    }

    public function create()
    {
        return view('Doacoes.create');
    }

    public function store(UpdateStoredoacoesRequest $request)
    {
        $doacoes = Doacoes::create($request->all());

        if (!$doacoes) {
            dd($doacoes);
        }

        return redirect()->route('doacoes.index')->with('success', "Cadastro efetivado com sucesso!");
    }

    public function edit($id)
    {
        $doacao = Doacoes::findOrFail($id);
        return view('Doacoes.edit', compact('doacao'));
    }

    public function update(UpdateStoreDoacoesRequest $request, $id)
    {
        $doacoes = Doacoes::findOrFail($id);
        $doacoes->update($request->all());
        return redirect()->route('doacoes.index')->with('success', "Cadastro atualizado com sucesso!");
    }

    public function destroy($id)
    {
        $doacoes = Doacoes::findOrFail($id);
        $doacoes->delete();
        return redirect()->route('doacoes.index')->with('danger', "Cadastro deletado com sucesso!");
    }
}

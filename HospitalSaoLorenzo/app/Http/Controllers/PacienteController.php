<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateStorePacientes;
use App\Models\Paciente;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    public function index()
    {
        $pacientes = Paciente::all();

        return view('Pacientes.index', compact('pacientes'));
    }

    public function create()
    {
        return view('Pacientes.new');
    }

    public function store(UpdateStorePacientes $request)
    {
        $paciente = new Paciente();
        $paciente->nome = $request->nome;
        $paciente->sobrenome = $request->sobrenome;
        $paciente->idade = $request->idade;
        $paciente->endereco = $request->endereco;
        $paciente->telefone = $request->telefone;
        $paciente->email = $request->email;
        $paciente->is_doador = $request->is_doador;
        $paciente->save();

        return redirect()->route('pacientes.index')->with('success', "Cadastro efetivado com sucesso!");
    }

    public function edit($id)
    {
        $paciente = Paciente::find($id);

        if (!$paciente) dd($paciente);

        return view('Pacientes.edit', compact('paciente'));
    }

    public function update(UpdateStorePacientes $request, $id)
    {
        $paciente = Paciente::find($id);

        if (!$paciente) dd($paciente);

        $paciente->nome = $request->nome;
        $paciente->sobrenome = $request->sobrenome;
        $paciente->idade = $request->idade;
        $paciente->endereco = $request->endereco;
        $paciente->telefone = $request->telefone;
        $paciente->email = $request->email;
        $paciente->is_doador = $request->is_doador;
        $paciente->save();

        return redirect()->route('pacientes.index')->with('success', "Paciente {$id} editado com sucesso!");
    }

    public function show($id)
    {
        $paciente = Paciente::find($id);

        if (!$paciente) dd($paciente);

        return view('Pacientes.show', compact('paciente'));
    }

    public function destroy($id)
    {
        $paciente = Paciente::find($id);

        if (!$paciente) dd($paciente);

        $paciente->delete();

        return redirect()->route('pacientes.index')->with('danger', "Paciente {$id} deletado com sucesso!");
    }
}

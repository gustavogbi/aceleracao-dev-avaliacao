<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    public function index() {
        $pacientes = Paciente::all();

        return view('Pacientes.index', compact('pacientes'));
    }

    public function create() {
        return view('Pacientes.new');
    }

    public function store(Request $request) {
        //dd($request);
        $paciente = new Paciente();
        $paciente->nome = $request->nome;
        $paciente->sobrenome = $request->sobrenome;
        $paciente->idade = $request->idade;
        $paciente->endereco = $request->endereco;
        $paciente->telefone = $request->telefone;
        $paciente->email = $request->email;
        if ($request->is_doador == null) $paciente->is_doador = false;
        else $paciente->is_doador = true;
        //dd($paciente);
        $paciente->save();

        //$paciente = Paciente::create($request->all());

        // if(!$paciente){
        //     dd($paciente);
        // }

        return redirect()->route('pacientes.index')->with('success', "Cadastro efetivado com sucesso!");
    }
}

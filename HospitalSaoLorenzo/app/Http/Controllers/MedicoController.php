<?php

namespace App\Http\Controllers;

use App\Models\Medico;
use Illuminate\Http\Request;

class MedicoController extends Controller
{
    public function index(){
        $medicos = Medico::all();
        //dd($medico);
        return view('medicos.index', compact('medicos'));
    }
    public function show($id)
    {
        $medico = Medico::findOrFail($id);
        return view('Medicos.show', compact('medico'));
    }
}

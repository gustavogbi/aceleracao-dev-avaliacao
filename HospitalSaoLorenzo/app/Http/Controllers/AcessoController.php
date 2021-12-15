<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BancoSangue;
use App\Models\Doacoes;
use App\Models\Doador;
use App\Models\Medico;
use App\Models\Estagiario;

class AcessoController extends Controller
{
    public function index(){
        $bancodesangues = BancoSangue::count();
        $medicos = Medico::count();
        $doadores = Doador::count();
        $doacoes = Doacoes::count();
        $estagiarios = Estagiario::count();
        return view('welcome', compact('bancodesangues', 'medicos', 'doadores','doacoes', 'estagiarios'));
    }   
    public function relatorioadministrativo(){
        $medicos = Medico::all();
        $estagiarios = Estagiario::all();
        $qtd_medicos = Medico::count();
        $qtd_estagiarios = Estagiario::count();
        return view('relatorios.relatorioadministrativo', compact('qtd_medicos', 'medicos', 'qtd_estagiarios', 'estagiarios'));
    }  
    
}

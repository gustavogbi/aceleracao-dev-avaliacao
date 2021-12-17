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
    public function index()
    {
        $bancodesangues = BancoSangue::count();
        $medicos = Medico::count();
        $doadores = Doador::count();
        $doacoes = Doacoes::count();
        $estagiarios = Estagiario::count();
        return view('welcome', compact('bancodesangues', 'medicos', 'doadores', 'doacoes', 'estagiarios'));
    }
    public function relatorioadministrativo()
    {
        $medicos = Medico::all();
        $estagiarios = Estagiario::all();
        $qtd_medicos = Medico::count();
        $qtd_estagiarios = Estagiario::count();
        return view('relatorios.relatorioadministrativo', compact('qtd_medicos', 'medicos', 'qtd_estagiarios', 'estagiarios'));
    }


    public function relatoriodedoacoes()
    {
        $doadores = Doador::all();
        $bancodesangues = BancoSangue::all();
        $doacoes = Doacoes::all();
        $qtd_doadores = Doador::count();
        $qtd_bancodesangues = BancoSangue::count();
        $qtd_doacoes = Doador::count();
        return view('relatorios.relatoriodedoacoes', compact('qtd_doadores', 'qtd_bancodesangues', 'qtd_doacoes', 'doadores', 'bancodesangues', 'doacoes'));
    }
}

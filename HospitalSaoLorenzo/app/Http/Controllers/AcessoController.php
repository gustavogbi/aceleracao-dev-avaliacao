<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BancoSangue;
use App\Models\Doacoes;
use App\Models\Doador;
use App\Models\Medico;

class AcessoController extends Controller
{
    public function index(){
        $bancodesangues = BancoSangue::count();
        $medicos = Medico::count();
        $doadores = Doador::count();
        $doacoes = Doacoes::count();
        return view('welcome', compact('bancodesangues', 'medicos', 'doadores','doacoes'));
    }  
    
}

<?php

namespace App\Http\Controllers;
use App\Models\BancoSangue;
use Illuminate\Http\Request;

class BancoSangueController extends Controller
{
    public function index(){
        $bancodesangues = BancoSangue::all();
        return view('Banco.index', compact('bancodesangues'));
    }  
    
    public function new(){
        return view('Banco.new');
    }
    
    function insert(Request $request){
        $bancodesangue = BancoSangue::create($request->all());
        if(!$bancodesangue){
            dd($bancodesangue);
        }

        return redirect()->route('bancodesangue.index')->with('mensagem', "Cadastro efetivado com sucesso!");;
    }
}

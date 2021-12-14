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

        return redirect()->route('bancodesangue.index')->with('success', "Cadastro efetivado com sucesso!");
    }

    
    function delete($id){
        $bancodesangue = BancoSangue::find($id);

        if(!$bancodesangue):
            return redirect()->route('bancodesangue.index');
        endif;

        $bancodesangue->delete();
        return redirect()->route('bancodesangue.index')->with('danger', "Cadastro foi deletado com sucesso!");
    }

    
    function edit($id){
        $bancodesangue = BancoSangue::find($id);

        if(!$bancodesangue):
            return redirect()->back();
        endif;

        return view('banco.edit', compact('bancodesangue'));
    }
    
    public function update(Request $request, $id){
        $bancodesangue = BancoSangue::find($id);

        if(!$bancodesangue):
            return redirect()->back();
        endif;

        $bancodesangue->update($request->all());
        return redirect()->route('bancodesangue.index')->with('success', "Registro #{$id} foi alterado com sucesso!");
    }
    
    function show($id){
        $bancodesangue = BancoSangue::find($id);
        if(!$bancodesangue){
            return redirect()->route('bancodesangue.index');
        }
        
        return view('banco.show', compact('bancodesangue'));
    }

}

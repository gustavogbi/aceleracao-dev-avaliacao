<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfessorRequest;
use App\Models\Professor;
use Illuminate\Http\Request;

class ProfessorController extends Controller
{
         
    protected $view = 'professor';
    protected $route = 'professor';

    public function index()
    {
        $cads = Professor::all();
        return view($this->view.'.index', compact('cads'));
    }

    public function create()
    {
        return view($this->view.'.create');
    }

    public function store(ProfessorRequest $request)
    {
        $cad = Professor::create($request->all());
        return redirect()->route($this->route.'.index')->with('success', "Cadastro inserido com sucesso");
    }

    public function show($id)
    {
        $cad = Professor::find($id);
        if($cad){
            return view($this->view.'.show', compact('cad'));  
        }   
        return redirect()->back();
    }

    public function edit($id)
    {
        $cad = Professor::find($id);
        if(!$cad):
            return redirect()->back();
        endif;
        return view($this->view.'.update', compact('cad')); 
    }

    public function update(ProfessorRequest $request, $id)
    {
        $cad = Professor::find($id);
        if(!$cad):
            return redirect()->back();
        endif;
        $cad->update($request->all());
        $id= $cad->id;
        return redirect()->route($this->route.'.index')->with('success', "Cadastro alterado com sucesso");
    }

    public function destroy($id)
    {
        $cad = Professor::find($id);
        if(!$cad):
            return redirect()->back();
        endif;
        $cad->delete();
        return redirect()->route($this->route.'.index')->with('danger', "Cadastro deletado com sucesso");
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Professor;
use Illuminate\Http\Request;

class ProfessorController extends Controller
{
         
    protected $view = 'professor';
    protected $route = 'professores';

    public function index()
    {
        $cads = Professor::all();
        return view($this->view.'.index', compact('cads'));
    }

    public function create()
    {
        return view($this->view.'.create');
    }

    public function store(Request $request)
    {
        $cad = Professor::create($request->all());
        return view($this->view.'.update', compact('cad'))->with('success', "Cadastrado efetivado com sucesso!");
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

    public function update(Request $request, $id)
    {
        $cad = Professor::find($id);
        if(!$cad):
            return redirect()->back();
        endif;

        $cad->update($request->all());
        $id= $cad->id;
        return view($this->view.'.update', compact('cad'))->with('success', "Cadastrado efetivado com sucesso!");
    }

    public function destroy($id)
    {
        
        $cad = Professor::find($id);
        if(!$cad):
            return redirect()->back();
        endif;

        $cad->delete();
        return view($this->view.'.update', compact('cad'))->with('success', "Cadastrado efetivado com sucesso!");
    }
}

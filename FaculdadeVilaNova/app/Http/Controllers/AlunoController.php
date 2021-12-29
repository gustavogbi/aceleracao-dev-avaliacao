<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\AlunoRequest;
use Carbon\Carbon;

class AlunoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     
    protected $view = 'aluno';
    protected $route = 'alunos';

    public function index()
    {
            $cads = Aluno::paginate(8);
            return view($this->view.'.index', compact('cads'));
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view($this->view.'.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AlunoRequest $request)
    {
        $cad = Aluno::create($request->all());
        //Verifica se o aluno é maior de idade
        if(Carbon:: parse($cad->datanascimento)->diff(\Carbon\Carbon::now())->format('%y') > 18)
        {
            $cad->responsavelFinanceiro = 'Aluno maior de idade';
        }
        return redirect()->route($this->route . '.index')->with('success', "Cadastrado efetivado com sucesso!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Aluno  $aluno
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cad = Aluno::find($id);
        if($cad)
        {
        return view($this->view.'.show', compact('cad'));  
        }   
        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Aluno  $aluno
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cad = Aluno::find($id);
        if(!$cad):
            return redirect()->back();
        endif;
         return view($this->view.'.update', compact('cad')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Aluno  $aluno
     * @return \Illuminate\Http\Response
     */
    public function update(AlunoRequest $request, $id)
    {
        $cad = Aluno::find($id);
        if(!$cad):
            return redirect()->back();
        endif;
        $cad->update($request->all());
       //Verifica se o aluno é maior de idade
        if((Carbon:: parse($cad->datanascimento)->diff(\Carbon\Carbon::now())->format('%y') > 18) )
        {
            $cad->responsavelFinanceiro = 'Aluno maior de idade';
        }
        $id= $cad->id;

        return redirect()->route($this->route . '.index')->with('success', "Cadastrado atualizado com sucesso!");  }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Aluno  $aluno
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cad = Aluno::find($id);

        if(!$cad):
            return redirect()->back();
        endif;

        $cad->delete();
        return redirect()->route($this->route.'.index')->with('danger', "Cadastro deletado com sucesso");
    }
}
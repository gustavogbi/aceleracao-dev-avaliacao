<?php

namespace App\Http\Controllers;

use App\Models\{Aluno, Aula, Curso, PlanoFinanceiro};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\AlunoRequest;
use Carbon\Carbon;
use Database\Seeders\AulaSeeder;
use Illuminate\Support\Facades\DB;

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
        $cursos= Curso::all();
        $planos= PlanoFinanceiro::all();
        return view($this->view.'.create',  compact('cursos', 'planos'));
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
        $cad->idade = self::calc_idade($cad->datanascimento);
        $cad->save();
        if(( $cad->idade > 18) )
        {
            $cad->responsavelFinanceiro = 'Aluno maior de idade';
            $cad->save();
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
            $aulas = Aula::where('idcurso',$cad->idcursos)->get();
            $curso = Curso::find($cad->idcursos);
            $plano = PlanoFinanceiro::find($cad->idplano);
            $desconto =number_format(( ($curso->mensalidade) - (($curso->mensalidade /100) * $plano->desconto)) , 2, '.', '');
        return view($this->view.'.show', compact('cad', 'aulas','curso', 'plano', 'desconto'));  
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
        $cursos= Curso::all();
        $planos= PlanoFinanceiro::all();
        return view($this->view.'.update',  compact('cursos', 'planos', 'cad'));
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
       $cad->idade = self::calc_idade($cad->datanascimento);
       $cad->save();
        if(( $cad->idade  > 18) )
        {$cad->responsavelFinanceiro = 'Aluno maior de idade';$cad->save();}
        else
        {if($cad->responsavelFinanceiro == 'Aluno maior de idade')
            {$cad->responsavelFinanceiro = 'Responsável financeiro não informado';$cad->save();}}

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

    static function calc_idade($nascimento)
     {
        $nascimento=explode('-',$nascimento); //Cria um array com os campos da data de nascimento separado por -
        $data=date('d/m/Y'); $data=explode('/',$data); //Cria um array com os campos da data atual 
        $anos=$data[2]-$nascimento[0]; //ano atual - ano de nascimento 
        //A data $nascimento é no formato ('Y-m-d) 

        if($nascimento[1] > $data[1]) return $anos-1; //Se o mês de nascimento for maior que o mês atual, diminui um ano 
        if($nascimento[1] == $data[1]){ //se o mês de nascimento for igual ao mês atual, precisamos ver os dias 
          if($nascimento[2] <= $data[0]) { return $anos; } else{ return $anos-1; } }

      return $anos; 
    }
}
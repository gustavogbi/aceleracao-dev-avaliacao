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
        return view($this->view . '.index', compact('cads'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cursos = Curso::all();
        $planos = PlanoFinanceiro::all();
        return view($this->view . '.create',  compact('cursos', 'planos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AlunoRequest $request)
    {
        Aluno::create($request->all());

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
        if ($cad) {
            $aulas = Aula::where('idcurso', $cad->idcursos)->get();
            $curso = Curso::find($cad->idcursos);
            $plano = PlanoFinanceiro::find($cad->idplano);
            $desconto = number_format((($curso->mensalidade) - (($curso->mensalidade / 100) * $plano->desconto)), 2, '.', '');
            return view($this->view . '.show', compact('cad', 'aulas', 'curso', 'plano', 'desconto'));
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
        if (!$cad) :
            return redirect()->back();
        endif;
        $cursos = Curso::all();
        $planos = PlanoFinanceiro::all();
        return view($this->view . '.update',  compact('cursos', 'planos', 'cad'));
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
        if (!$cad) :
            return redirect()->back();
        endif;

        $cad->update($request->all());

        return redirect()->route($this->route . '.index')->with('success', "Cadastrado atualizado com sucesso!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Aluno  $aluno
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cad = Aluno::find($id);

        if (!$cad) :
            return redirect()->back();
        endif;

        $cad->delete();
        return redirect()->route($this->route . '.index')->with('danger', "Cadastro deletado com sucesso");
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\AulaRequest;
use App\Models\Aluno;
use App\Models\Aula;
use App\Models\Curso;
use App\Models\Professor;
use Illuminate\Support\Facades\Auth;

class AulaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $view = 'crud.aula';
    protected $route = 'aulas';

    public function index()
    {
        $user = Auth::user();
        if($user->role == 1)
        {
            $professor = Professor::Where('cpf', $user->cpf)->first();
            if(!$professor){
                return redirect()->back();
            }
            $cads = Aula::Where('idprofessor', $professor->id)->paginate(8);
            $aula = Aula::Where('idprofessor', $professor->id)->first();
            if($aula)
            $idcurso = $aula->idcurso;
            else
            $idcurso ="0";
            return view($this->view . '.index', compact('cads','idcurso'));
        }
        if($user->role == 0)
        {
            $cad = Aluno::Where('cpf', $user->cpf)->first();
            if(!$cad){
                return redirect()->back();
            }
            $cads = Aula::Where('idcurso', $cad->idcursos)->paginate(8);
            return view($this->view . '.index', compact('cads'));
        }
        if($user->role == 9)
        {
            $cads = Aula::paginate(8);
            return view($this->view . '.index', compact('cads'));
        }

    }

    public function create()
    {
        $cursos = Curso::all();
        $professores = Professor::all();

        return view($this->view.'.create',  compact('cursos', 'professores'));
    }

    public function store(AulaRequest $request)
    {
        $cad = Aula::create($request->all());

        return view($this->view.'.index', compact('cad'))->with('success', "Cadastrado efetivado com sucesso!");
    }

    public function show($id)
    {
        $cad = Aula::findOrFail($id);

        if($cad)
        {
            return view($this->view.'.show', compact('cad'));
        }

        return redirect()->back();
    }

    public function edit($id)
    {
        $cursos = Curso::all();
        $professores = Professor::all();
        $cad = Aula::findOrFail($id);

        if(!$cad):
            return redirect()->back();
        endif;

        return view($this->view.'.update', compact('cad', 'cursos', 'professores'));
    }

    public function update(AulaRequest $request, $id)
    {
        $cad = Aula::findOrFail($id);
        
        if(!$cad):
            return redirect()->back();
        endif;

        $cad->update($request->all());
        $id = $cad->id;

        return redirect()->route($this->route . '.index')->with('success', "Cadastrado atualizado com sucesso!");
    }

    public function destroy($id)
    {
        $cad = Aula::findOrFail($id);
        $cad->delete();

        return redirect()->route($this->route . '.index')->with('danger', "Cadastro deletado com sucesso");
    }
}
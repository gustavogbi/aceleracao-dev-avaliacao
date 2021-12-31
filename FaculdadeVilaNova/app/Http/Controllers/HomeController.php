<?php

namespace App\Http\Controllers;

use App\Models\{Professor, Aula, Aluno, Curso, PlanoFinanceiro};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        if($user->role == 1)
        {            
        $professor = Professor::Where('cpf', $user->cpf)->first();
        if($professor){
            $idprofessor =  $professor->id;
            $aulas = Aula::Where('idprofessor' ,  $idprofessor)->get();
            //Verifica se tem aulas
            if(!$aulas){ $aulasstatus = "0";}else{$aulasstatus="1";}
            $idcurso = $aulas[0]->idcurso;
            $nomecurso = $aulas[0]->_Curso();
            $alunos = Aluno::Where('idcursos' ,  $idcurso)->get();
            //verifica se tem alunos
            if(!$alunos){ $alunosstatus = "0";}else{$alunosstatus="1";}
            $professor->nome = $user->name;
            $professor->save();
            //Avisa que o professor esta vinculado ao user
            $status = "1";
            return view('home', compact('alunosstatus',
            'aulasstatus','aulas','status', 'alunos','nomecurso','idcurso', 'nomecurso'));
        } 
    }
        if($user->role == 0)
        {            
        $aluno = Aluno::Where('cpf', $user->cpf)->first();
        if($aluno){
            $aulas = Aula::Where('idcurso' , $aluno->idcursos)->get();
            $idcurso = $aulas[0]->idcurso;
            $nomecurso = $aulas[0]->_Curso();
            $alunos = Aluno::Where('idcursos' ,  $idcurso)->get();
            $status = "1";
            $aluno->nome = $user->name;
            $aluno->save();
            $cad = $aluno;
        $curso = Curso::find($cad->idcursos);
        $plano = PlanoFinanceiro::find($cad->idplano);
        
        $desconto = number_format((($curso->mensalidade) - (($curso->mensalidade / 100) * $plano->desconto)), 2, '.', '');
          
            return view('home', compact('curso','desconto',    'plano','cad','aulas','status', 'alunos','nomecurso','idcurso', 'nomecurso'));
        }else
        {
            $status = "0";
            $cursos = Curso::all();
            $planos = PlanoFinanceiro::all();
            return view('home', compact('status', 'cursos', 'planos'));
        }
    }
        if($user->role == 9)
        
        {
            $status = "1";
            return view('home', compact('status'));
        }
        
        //Verifica se o usuario já terminou seu cadastro de professor
        else 
        {$status = "0";
            return view('home', compact('status'));}
        }

        public function endpoints(){
            
            return view('api.endpoints');
        }
    }


@extends('layouts.single')
@section('content')

<div class="container">
    <div class="row ">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Aluno</div>
  
                <div class="card-body">
                <a href="{{route('alunos.index') }}"><button type="button" class="btn btn-success tet-white">
                  <i class="fa fa-arrow-left"></i> VOLTAR</button></a>
              
                </div>
            </div>
        </div>
    </div>
  </div>
<div class="container">
    <div class="row ">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dados</div>

               <div class="card-body">
              <strong> Nome:</strong>  {{$cad->nome}}<br><hr>
              <strong>   Matricula:</strong>  {{$cad->matricula}} <br><hr>
              <strong>   Data de nascimento: </strong> {{ date('d/m/Y', strtotime( $cad->datanascimento) )}} <br><hr>
              <strong>   Responsável:</strong>  {{$cad->responsavelFinanceiro}} <br>     <hr>
              <strong>  CPF:</strong>  {{$cad->cpf}} <br>     <hr>
              <strong> Curso:</strong>  {{$cad->_curso()}} <br>   <hr>      
              <strong>  Plano:</strong>  {{$cad->_plano()}} <br>   <hr>         
               </div>
            </div>
        </div>
    </div>
</div>
@endsection
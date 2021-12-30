@extends('layouts.single')
@section('content')
<div class="container">
    <div class="row ">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h1><strong> API Alunos</strong></h1></div>
                <div class="card-body">
                    
               <h2> <strong>Documentação API Alunos</strong></h2>
Esta documentação tem por finalidade auxiliar a integração entre APIs e facilitar a usabilidade da plataforma FVL para android.
                <br>
                <hr>
                <h2> <strong> Endpoint</strong></h2>
O endpoint de conexão com a API REST JSON da FVL  é: http://localhost:8000/api
<hr>
<h2> <strong> Recursos disponiveis</strong></h2>
Atualmente existem os seguintes recursos abaixo que você pode manipular através dos métodos GET, POST, PUT e DELETE:
<br>
<ul class="list-group">
  <li class="list-group-item">Cursos</li>
  <li class="list-group-item">Alunos</li>
  <li class="list-group-item">Planos financeiros</li>
  <li class="list-group-item">Professores</li>
  <li class="list-group-item">Aulas</li>
</ul>
                <br>
                <strong> Todos os alunos: </strong><br>
                /api/alunos
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">

    @include('layouts.alerts')
    <div class="row ">
        <div class="col-md-12">

        </div>
    </div>
    @endsection
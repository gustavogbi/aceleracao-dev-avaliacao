@extends('layouts.single')
@section('content')

<div class="container">
    <div class="row ">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Professor</div>
  
                <div class="card-body">
                <a href="{{route('professores.index') }}"><button type="button" class="btn btn-success tet-white">
                  <i class="fa fa-arrow-left"></i> VOLTAR</button></a>
              
                </div>
            </div>
        </div>
    </div>
  </div>
<div class="container">

<div class="container">
    <div class="row ">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dados</div>

                <div class="card-body">
                    Nome: {{$cad->nome}} <br>
                    Matricula: {{$cad->matricula}} <br>
                    Competencia: {{$cad->competencia}} <br>
                    Escolaridade: {{$cad->escolaridade}} <br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
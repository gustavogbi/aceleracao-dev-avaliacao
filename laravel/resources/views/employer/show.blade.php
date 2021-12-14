@extends('includes.single')
@section('content')
    <div class="container">
        <h1 class="text-primary text-center">
                Funcionarios
        </h1>

        <ul class="list-group list-group-flush text-center">
            <h3><li class="list-group-item">ID: {{$employer->id}}</li></h3>
            <h3><li class="list-group-item">Funcionaro: {{$employer->name}}</li></h3>
            <h3><li class="list-group-item">Função: {{$employer->jobRole}}</li></h3>
            <h3><li class="list-group-item">Salário:R$ {{$employer->wage}},00</li></h3>
            <h3><li class="list-group-item">Tempo de Contrato: {{$employer->serviceTime}} anos</li></h3>
        </ul>

        <div class="row d-flex justify-content-center mt-2">
            <a href="{{route('funcionarios')}}" class="btn btn-primary col-6">Listar Todos os Funcionarios</a>
        </div>
    </div>
@endsection

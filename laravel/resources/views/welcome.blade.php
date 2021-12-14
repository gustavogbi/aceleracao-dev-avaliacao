@extends('includes.single')
@section('content')

    <div class="container my-5">
        <div class="row">
            <h2 class="text-center my-3">2 Atividade em Grupo</h2>
        </div>

        <div class="row my-5 justify-content-around">
            <div class="card col-5">
                <div class="card-header text-center">
                    <h2>Limpa Limpa</h2>
                </div>
                <div class="card-body d-flex align-items-start">
                    <a href="{{route('funcionarios')}}" class="btn btn-primary col-4">Funcionarios</a>
                    <a href="{{route('itens')}}" class="btn btn-primary ms-1 col-4">Itens</a>
                    <a href="{{route('quadroMensal')}}" class="btn btn-primary ms-1 col-4">Quadro</a>
                </div>
            </div>
        </div>
    </div>
@endsection

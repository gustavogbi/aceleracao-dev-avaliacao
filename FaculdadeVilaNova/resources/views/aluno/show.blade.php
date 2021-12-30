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
                <div class="card-header">Dados </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md">
                    <strong> Nome:</strong> {{$cad->nome}}<br>
                   
                    <strong> Matricula:</strong> {{$cad->matricula}} <br>
                   
                    <strong> Data de nascimento: </strong> {{ date('d/m/Y', strtotime( $cad->datanascimento) )}} <br>
                   
                    <strong> Idade:</strong> {{$cad->idade}} <br>

                    <strong> Responsável:</strong>
                    @if($cad->idade >= 18 ) Aluno maior de idade @else {{$cad->responsavelFinanceiro}} @endif <br>
                   
                    <strong> CPF:</strong> {{$cad->cpf}} <br>
                </div>
                        <div class="col-md">
                    <strong> Curso:</strong> {{$cad->_curso()}} <br>
                    <strong> Mensalidade:</strong> R${{$curso->mensalidade}}<br>
                    <strong> Plano:</strong> {{$cad->_plano()}} <br>
                     <strong> Desconto:</strong> {{$plano->desconto}}%<br>
                    <strong> Mensalidade do curso com o desconto:</strong> R${{$desconto}} </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row ">
        <div class="col-md-12">
            <div class="card bg-info text-white">
                <div class="card-header">Aulas de {{$cad->nome}} </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Numero de Aula</th>
                            <th scope="col">Tema</th>
                            <th scope="col">Duração</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($aulas as $cad)
                        <tr>
                            <td>{{ $cad->num_aula }} </td>
                            <td>{{ $cad->tema }} </td>
                            <td>{{ $cad->duracao}} Horas </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
@extends('includes.single')
@section('content')
<div class="container">
    
<div class="text-primary"> Quadro mensal</div>
    <table class="table table-bordered mt-5">
        <thead>
            <tr>
            <th scope="col">Funcionario</th>
            <th scope="col">Dia</th>
            <th scope="col">Entrada</th>
            <th scope="col">Saida</th>
            </tr>
        </thead>
        @foreach ($quadrosMensal as $quadro)
            <tbody>
                <tr>
                    <td>{{$quadro->funcionario}}</td>
                    <td>{{$quadro->dia}}</td>
                    <td>{{$quadro->entrada}}</td>
                    <td>{{$quadro->saida}}</td>
                </tr>
            </tbody>
        @endforeach
    </table>
</div>
@endsection

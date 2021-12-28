@extends('layouts.single')
@section('content')
    <div class="container">
        <div class="row ">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Dados</div>
                    <div class="card-body">
                        Curso: {{ $cad->nomedocurso }} <br>
                        Quant. Max.: {{ $cad->qntmax }} <br>
                        Descrição: {{ $cad->descricao }} <br>
                        Categoria: {{ $cad->categoria }} <br>
                        Mensalidade: {{ $cad->mensalidade }} <br>
                        Status: {{ $cad->status }} <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

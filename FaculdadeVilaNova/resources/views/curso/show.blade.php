@extends('layouts.single')
@section('content')

    <div class="container">
        <div class="row ">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Cursos</div>

                    <div class="card-body">
                        <a href="{{ route('cursos.index') }}"><button type="button" class="btn btn-success tet-white">
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
                        Curso: {{ $cad->nomedocurso }} <br>
                        Quant. Max.: {{ $cad->qntmax }} <br>
                        Descrição: {{ $cad->descricao }} <br>
                        Categoria: {{ $cad->categoria }} <br>
                        Mensalidade: {{ $cad->mensalidade }} <br>
                        Status: {{ $cad->status }} <br>
                        @forelse ($aulas as $aula)
                            Aula: {{ $aula->numaula }} - {{ $aula->tema }} <br>
                        @empty
                            Aula: Sem aulas vinculadas <br>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

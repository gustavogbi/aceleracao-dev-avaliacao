@extends('layouts.single')
@section('content')

<div class="container">
    <div class="row ">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Planos financeiros</div>
  
                <div class="card-body">
                <a href="{{route('planos-financeiros.index') }}"><button type="button" class="btn btn-success tet-white">
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
                    @include('layouts.alerts')
                    <div class="card-body">
                        <form action="{{ route('planos-financeiros.store') }}" method="post">
                            @method('POST')
                            @include('plano-financeiro.form')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

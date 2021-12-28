@extends('layouts.single')
@section('content')

    <div class="container">
        <div class="row ">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Dados</div>
                    @include('layouts.alerts')
                    <div class="card-body">
                        <form action="{{ route('planos-financeiros.update', $cad->id) }}" method="post">
                            @method('PUT')
                            @include('plano-financeiro.form')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

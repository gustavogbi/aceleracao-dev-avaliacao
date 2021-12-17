@extends('single')
@section('content')

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Banco de sangue</h1>
        <a href="/bancodesangue" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-view fa-sm text-white-50"></i> Banco de sangue</a>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Detalhes do registro #{{ $bancodesangue->id }}</h6>
        </div>
        <div class="card-body">
            <p>Id: {{ $bancodesangue->id }}</p>
            <p>Tipo: {{ $bancodesangue->tipo }}</p>
            <p>Contabilidade: {{ $bancodesangue->contabilidade }}</p>
            <p>Data de cadastro: {{ $bancodesangue->created_at->format('d/m/Y') }}</p>
            <p>Ultima atualização: {{ $bancodesangue->updated_at->format('d/m/Y') }}</p>
        </div>
    </div>
@endsection

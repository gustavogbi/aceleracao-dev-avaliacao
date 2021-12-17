@extends('single')
@section('content')

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Doações</h1>
        <a href="/doacoes" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-view fa-sm text-white-50"></i> Doaçoes</a>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Detalhes do registro #{{ $doacao->id }}</h6>
        </div>
        <div class="card-body">
            <p>Id: {{ $doacao->id }}</p>
            <p>Nome doador: {{ $doacao->nome }}</p>
            <p>Telefone: {{ $doacao->telefone }}</p>
            <p>Email: {{ $doacao->email }}</p>
            <p>Quantidade de litros: {{ $doacao->qtd_litros }}</p>
            <p>Data de cadastro: {{ $doacao->created_at->format('d/m/Y') }}</p>
            <p>Ultima atualização: {{ $doacao->updated_at->format('d/m/Y') }}</p>
        </div>
    </div>
@endsection

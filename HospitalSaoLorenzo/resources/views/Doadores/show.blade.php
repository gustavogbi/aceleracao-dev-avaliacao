@extends('single')
@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Doadores</h1>
        <a href="{{ route('doador.index') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-list fa-sm text-white-50"></i> Todos</a>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Detalhes do registro #{{ $doador->id }}</h6>
        </div>
        <div class="card-body">
            <p>Id: {{ $doador->id }}</p>
            <p>Nome: {{ $doador->nome }}</p>
            <p>Telefone: {{ $doador->telefone }}</p>
            <p>E-mail: {{ $doador->email }}</p>
            <p>Peso: {{ $doador->peso }}</p>
            <p>Altura: {{ $doador->altura }}</p>
            <p>Fumante: {{ $doador->fumante ? 'sim' : 'não' }}</p>
            <p>Doenças: {{ $doador->doencas ? 'sim' : 'não' }}</p>
            <p>Observações: {{ $doador->observacoes }}</p>
            <p>Data de cadastro: {{ $doador->created_at->format('d/m/Y') }}</p>
            <p>Ultima atualização: {{ $doador->updated_at->format('d/m/Y') }}</p>
        </div>
    </div>
@endsection

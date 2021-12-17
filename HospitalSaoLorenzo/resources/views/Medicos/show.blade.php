@extends('single')
@section('content')

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Doações</h1>
        <a href="/medico" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-view fa-sm text-white-50"></i> Médicos</a>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Detalhes do registro #{{ $medico->id }}</h6>
        </div>
        <div class="card-body">
            <p>Id: {{ $medico->id }}</p>
            <p>Nome : {{ $medico->nome }}</p>
            <p>CRM: {{ $medico->CRM }}</p>
            <p>Area de atuação: {{ $medico->areaDeAtuacao }}</p>
            <p>Idade: {{ $medico->idade }}</p>
            <p>Telefone: {{ $medico->telefone }}</p>
            <p>Email: {{ $medico->email }}</p>
            <p>Data de cadastro: {{ $medico->created_at->format('d/m/Y') }}</p>
            <p>Ultima atualização: {{ $medico->updated_at->format('d/m/Y') }}</p>
        </div>
    </div>
@endsection

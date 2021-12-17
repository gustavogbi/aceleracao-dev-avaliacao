@extends('single')
@section('content')

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Pacientes</h1>
        <a href="/pacientes" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-list fa-sm text-white-50"></i> Todos</a>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Detalhes do registro #{{ $paciente->id }}</h6>
        </div>
        <div class="card-body">
            <p>Id: {{ $paciente->id }}</p>
            <p>Nome: {{ $paciente->nome }}</p>
            <p>Sobrenome: {{ $paciente->sobrenome }}</p>
            <p>Idade: {{ $paciente->idade }}</p>
            <p>Endereço: {{ $paciente->endereco }}</p>
            <p>Telefone: {{ $paciente->telefone }}</p>
            <p>E-mail: {{ $paciente->email }}</p>
            <p>Doador: {{ $paciente->is_doador ? 'sim' : 'não' }}</p>
            <p>Data de cadastro: {{ $paciente->created_at->format('d/m/Y') }}</p>
            <p>Ultima atualização: {{ $paciente->updated_at->format('d/m/Y') }}</p>
        </div>
    </div>
@endsection

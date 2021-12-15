@extends('single')
@section('content')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Pacientes</h1>
    <a href="/pacientes" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Todos</a>
</div>

                    
<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-md">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Editar Paciente</h1>
                        </div>
                        <form action="{{route('pacientes.update', $paciente->id)}}" method="post">
                            @method('PUT')
                            @csrf
                            <div class="form-group row">
                                <div class="col-sm-5 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" name="nome" value="{{ $paciente->nome ?? $paciente->nome }}" 
                                        placeholder="Nome">
                                </div>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control form-control-user" name="sobrenome" value="{{ $paciente->sobrenome ?? $paciente->sobrenome }}"
                                        placeholder="Sobrenome">
                                </div>
                                <div class="col-sm-2">
                                    <input type="number" class="form-control form-control-user" name="idade" value="{{ $paciente->idade ?? $paciente->idade }}"
                                        placeholder="Idade">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" name="endereco" value="{{ $paciente->endereco ?? $paciente->endereco }}" 
                                        placeholder="Endereço">
                                </div>
                                <div class="col-sm-6">
                                    <input type="tel" class="form-control form-control-user" name="telefone" value="{{ $paciente->telefone ?? $paciente->telefone }}"
                                        placeholder="Telefone">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-8 mb-3 mb-sm-0">
                                    <input type="email" class="form-control form-control-user" name="email" value="{{ $paciente->email ?? $paciente->email }}" 
                                        placeholder="E-mail">
                                </div>
                                <div class="col-sm-1">
                                    @if ($paciente->email)
                                        <input type="checkbox" class="form-control" name="is_doador" checked>
                                    @else
                                        <input type="checkbox" class="form-control" name="is_doador">
                                    @endif
                                </div>
                                <div class="col-sm-3">
                                    <p class="form-control form-control-user">É doador?</p>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary btn-user btn-block">
                            Confirmar
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
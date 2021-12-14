@extends('single')
@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Medicos</h1>
        <a href="/bancodesangue" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
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
                                <h1 class="h4 text-gray-900 mb-4">Visualizar cadastro</h1>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" value="{{ $medico->CRM }}"
                                        placeholder="CRM" disabled>
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control form-control-user"
                                        value="{{ $medico->nome }}" placeholder="nome" disabled>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" value="{{ $medico->areaDeAtuacao }}"
                                        placeholder="Area De Atuacao" disabled>
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control form-control-user" value="{{ $medico->peso }}"
                                        placeholder="peso" disabled>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user"
                                        value="{{ $medico->idade }}" placeholder="idade" disabled>
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control form-control-user"
                                        value="{{ $medico->telefone }}" placeholder="telefone" disabled>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user"
                                        value="{{ $medico->email }}" placeholder="email" disabled>
                                </div>
                            </div>
                            <a href="{{ route('medico.index') }}" class="btn btn-primary btn-user btn-block">
                                Voltar
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

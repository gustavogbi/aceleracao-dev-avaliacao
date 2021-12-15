@extends('single')
@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Doadores</h1>
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
                                    <input type="text" class="form-control form-control-user" value="{{ $doador->nome }}"
                                        placeholder="Nome" disabled>
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control form-control-user"
                                        value="{{ $doador->telefone }}" placeholder="Telefone" disabled>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" value="{{ $doador->email }}"
                                        placeholder="E-mail" disabled>
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control form-control-user" value="{{ $doador->peso }}"
                                        placeholder="peso" disabled>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user"
                                        value="{{ $doador->altura }}" placeholder="Altura" disabled>
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control form-control-user"
                                        value="{{ $doador->fumante }}" placeholder="Fumante" disabled>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user"
                                        value="{{ $doador->doencas }}" placeholder="Doenças" disabled>
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control form-control-user"
                                        value="{{ $doador->observacoes }}" placeholder="Observações" disabled>
                                </div>
                            </div>
                            <a href="{{ route('doador.index') }}" class="btn btn-primary btn-user btn-block">
                                Voltar
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

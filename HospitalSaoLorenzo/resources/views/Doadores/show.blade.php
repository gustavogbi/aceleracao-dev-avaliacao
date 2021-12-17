@extends('single')
@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Doadores</h1>
        <a href="{{ route('doador.index') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-list fa-sm text-white-50"></i> Todos</a>
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
                                    Nome:
                                    <input type="text" class="form-control form-control-user" value="{{ $doador->nome }}"
                                        disabled>
                                </div>
                                <div class="col-sm-6">
                                    Telefone:
                                    <input type="text" class="form-control form-control-user"
                                        value="{{ $doador->telefone }}" disabled>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    Email:
                                    <input type="text" class="form-control form-control-user" value="{{ $doador->email }}"
                                        disabled>
                                </div>
                                <div class="col-sm-6">
                                    Peso:
                                    <input type="text" class="form-control form-control-user" value="{{ $doador->peso }}"
                                        disabled>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    Altura:
                                    <input type="text" class="form-control form-control-user"
                                        value="{{ $doador->altura }}" disabled>
                                </div>
                                <div class="col-sm-6">Fumante:
                                    <input type="text" class="form-control form-control-user"
                                        value="{{ $doador->fumante }}" disabled>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    Doenças:
                                    <input type="text" class="form-control form-control-user"
                                        value="{{ $doador->doencas }}" disabled>
                                </div>
                                <div class="col-sm-6">
                                    Observações:
                                    <input type="text" class="form-control form-control-user"
                                        value="{{ $doador->observacoes }}" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

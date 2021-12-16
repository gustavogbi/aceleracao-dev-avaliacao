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
                                <h1 class="h4 text-gray-900 mb-4">Novo cadastro</h1>
                            </div>

                            <form action="{{ route('pacientes.store') }}" method="post">
                                @if ($errors->any())
                                    <div>
                                        @foreach ($errors->all() as $error)
                                            <p style="color: red"> {{ $error }} </p>
                                        @endforeach
                                    </div>
                                @endif
                                @csrf
                                <div class="form-group row">
                                    <div class="col-sm-5 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" name="nome"
                                            placeholder="Nome" value="{{ old('nome') }}">
                                    </div>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control form-control-user" name="sobrenome"
                                            placeholder="Sobrenome" value="{{ old('sobrenome') }}">
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="number" class="form-control form-control-user" name="idade"
                                            placeholder="Idade" value="{{ old('idade') }}">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" name="endereco"
                                            placeholder="Endereço" value="{{ old('endereco') }}">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="tel" class="form-control form-control-user" name="telefone"
                                            placeholder="Telefone" value="{{ old('telefone') }}">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-8 mb-3 mb-sm-0">
                                        <input type="email" class="form-control form-control-user" name="email"
                                            placeholder="E-mail" value="{{ old('email') }}">
                                    </div>
                                    <div class="col-sm-1">
                                        <input type="checkbox" class="form-control" name="is_doador">
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

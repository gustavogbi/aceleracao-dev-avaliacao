@extends('single')
@section('content')

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Pacientes</h1>
        <a href="{{ route('pacientes.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus fa-sm text-white-50"></i> Novo</a>
    </div>


    <!-- Begin Page Content -->
    <div class="container-fluid">
        @if (session('danger'))
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                {{ session('danger') }}
            </div>
        @endif
        @if (session('success'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Successo! </strong> {{ session('success') }}
            </div>
        @endif
        <!-- Page Heading -->

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Sobrenome</th>
                                <th>Idade</th>
                                <th>Endereço</th>
                                <th>Telefone</th>
                                <th>E-mail</th>
                                <th>É Doador?</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pacientes as $paciente)
                                <tr>
                                    <td>{{ $paciente->id }}</td>
                                    <td>{{ $paciente->nome }}</td>
                                    <td>{{ $paciente->sobrenome }}</td>
                                    <td>{{ $paciente->idade }}</td>
                                    <td>{{ $paciente->endereco }}</td>
                                    <td>{{ $paciente->telefone }}</td>
                                    <td>{{ $paciente->email }}</td>
                                    @if ($paciente->is_doador)
                                        <td>Sim</td>
                                    @else <td>Não</td>
                                    @endif
                                    <td>
                                        <!-- Button to Open the Modal -->
                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                            data-target="#myModal{{ $paciente->id }}">
                                            Excluir</button>

                                        <!-- The Modal -->
                                        <div class="modal" id="myModal{{ $paciente->id }}">
                                            <div class="modal-dialog">
                                                <div class="modal-content">

                                                    <!-- Modal Header -->
                                                    <div class="modal-header">
                                                        <button type="button" class="close"
                                                            data-dismiss="modal">&times;</button>
                                                    </div>

                                                    <!-- Modal body -->
                                                    <div class="modal-body">
                                                        Tem certeza que deseja remover o registro
                                                        #{{ $paciente->id }}?<br>
                                                        <form action="{{ route('pacientes.destroy', $paciente->id) }}"
                                                            method="post">
                                                            <input type="hidden" name="_method" value="DELETE">
                                                            @csrf
                                                            <button type="submmit" class="btn btn-danger">Remover</button>

                                                            <button type="button" class="btn btn-primary"
                                                                data-dismiss="modal">Cancelar</button>
                                                        </form>
                                                    </div>

                                                    <!-- Modal footer -->
                                                    <div class="modal-footer">
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <a href="{{ route('pacientes.edit', $paciente->id) }}">

                                            <button type="button" class="btn btn-success  btn-sm">Editar</button></a>

                                        <a href="{{ route('pacientes.show', $paciente->id) }}">
                                            <button type="button" class="btn btn-primary btn-sm">Vizualizar</button></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection

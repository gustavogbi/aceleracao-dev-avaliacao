@extends('single')
@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Doações</h1>
        <a href="{{ route('doacoes.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
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
                                <th>Telefone</th>
                                <th>Email</th>
                                <th>Litros</th>
                                <th>Acções</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($doacoes as $doacao)
                                <tr>
                                    <td>{{ $doacao->id }}</td>
                                    <td>{{ $doacao->nome }}</td>
                                    <td>{{ $doacao->telefone }}</td>
                                    <td>{{ $doacao->email }}</td>
                                    <td>{{ $doacao->qtd_litros }}</td>
                                    <td>
                                        <!-- Button to Open the Modal -->
                                        <button type="button" class="btn btn-danger" data-toggle="modal"
                                            data-target="#myModal{{ $doacao->id }}">
                                            Excluir</button>

                                        <!-- The Modal -->
                                        <div class="modal" id="myModal{{ $doacao->id }}">
                                            <div class="modal-dialog">
                                                <div class="modal-content">

                                                    <!-- Modal Header -->
                                                    <div class="modal-header">
                                                        <button type="button" class="close"
                                                            data-dismiss="modal">&times;</button>
                                                    </div>

                                                    <!-- Modal body -->
                                                    <div class="modal-body">
                                                        Tem certeza que deseja remover o registro #{{ $doacao->id }}?<br>
                                                        <form action="{{ route('doacoes.destroy', $doacao->id) }}"
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
                                        <a href="/doacoes/edit/{{ $doacao->id }}">

                                            <button type="button" class="btn btn-success">Editar</button></a>

                                        <a href="{{ route('doacoes.show', $doacao->id) }}">
                                            <button type="button" class="btn btn-primary">Vizualizar</button></a>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Telefone</th>
                                <th>Email</th>
                                <th>Litros</th>
                                <th>Acções</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection

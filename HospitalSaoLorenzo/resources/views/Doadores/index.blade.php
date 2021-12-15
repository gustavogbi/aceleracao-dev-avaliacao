@extends('single')
@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Doadores</h1>
        <a href="{{ route('doador.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
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
                                <th>Peso</th>
                                <th>Altura</th>
                                <th>Fumante</th>
                                <th>Doencas</th>
                                <th>Observações</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($doadores as $doador)
                                <tr>
                                    <td>{{ $doador->id }}</td>
                                    <td>{{ $doador->nome }}</td>
                                    <td>{{ $doador->telefone }}</td>
                                    <td>{{ $doador->email }}</td>
                                    <td>{{ $doador->peso }}</td>
                                    <td>{{ $doador->altura }}</td>
                                    <td>{{ $doador->fumante }}</td>
                                    <td>{{ $doador->doencas }}</td>
                                    <td>{{ $doador->observacoes }}</td>
                                    <td>
                                        <<<<<<< HEAD <a href="{{ route('doador.show', $doador->id) }}">
                                            <button type="button" class="btn btn-primary">Vizualizar</button>
                                            </a>
                                            <a href="{{ route('doador.edit', $doador->id) }}">
                                                <button type="button" class="btn btn-success">Editar</button>
                                            </a>
                                            <button type="button" class="btn btn-danger" data-toggle="modal"
                                                data-target="#myModal{{ $doador->id }}">
                                                Excluir
                                            </button>
                                            <!-- The Modal -->
                                            <div class="modal" id="myModal{{ $doador->id }}">
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
                                                            #{{ $doador->id }}?<br>
                                                            <form action="{{ route('doador.destroy', $doador->id) }}"
                                                                method="post">
                                                                <input type="hidden" name="_method" value="DELETE">
                                                                @csrf
                                                                <button type="submmit"
                                                                    class="btn btn-danger">Remover</button>

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
                                            =======

                                            <!-- Button to Open the Modal -->
                                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                                data-target="#myModal{{ $doador->id }}">
                                                Excluir</button>

                                            <!-- The Modal -->
                                            <div class="modal" id="myModal{{ $doador->id }}">
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
                                                            #{{ $doador->id }}?<br>
                                                            <form action="{{ route('doador.destroy', $doador->id) }}"
                                                                method="post">
                                                                <input type="hidden" name="_method" value="DELETE">
                                                                @csrf
                                                                <button type="submmit"
                                                                    class="btn btn-danger">Remover</button>

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
                                            <a href="/doador/edit/{{ $doador->id }}">

                                                <button type="button" class="btn btn-success  btn-sm">Editar</button></a>

                                            <a href="{{ route('doador.show', $doador->id) }}">
                                                <button type="button" class="btn btn-primary btn-sm">Vizualizar</button></a>

                                    </td>
                                    >>>>>>> 23a1b1a56b5b49697aa9d8092497132edf34bedb
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
                                <th>Peso</th>
                                <th>Altura</th>
                                <th>Fumante</th>
                                <th>Doencas</th>
                                <th>Observações</th>
                                <th>Ações</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection

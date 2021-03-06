@extends('single')
@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Médicos</h1>
        <a href="{{ route('medico.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
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
                                <th>CRM</th>
                                <th>nome</th>
                                <th>Area De Atuacao</th>
                                <th>idade</th>
                                <th>telefone</th>
                                <th>email</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($medicos as $medico)
                                <tr>
                                    <td>{{ $medico->id }}</td>
                                    <td>{{ $medico->CRM }}</td>
                                    <td>{{ $medico->nome }}</td>
                                    <td>{{ $medico->areaDeAtuacao }}</td>
                                    <td>{{ $medico->idade }}</td>
                                    <td>{{ $medico->telefone }}</td>
                                    <td>{{ $medico->email }}</td>
                                    <td>
                                        <!-- Button to Open the Modal -->
                                        <button type="button" class="btn btn-danger" data-toggle="modal"
                                            data-target="#myModal{{ $medico->id }}">
                                            Excluir</button>

                                        <!-- The Modal -->
                                        <div class="modal" id="myModal{{ $medico->id }}">
                                            <div class="modal-dialog">
                                                <div class="modal-content">

                                                    <!-- Modal Header -->
                                                    <div class="modal-header">
                                                        <button type="button" class="close"
                                                            data-dismiss="modal">&times;</button>
                                                    </div>

                                                    <!-- Modal body -->
                                                    <div class="modal-body">
                                                        Tem certeza que deseja remover o registro #{{ $medico->id }}?<br>
                                                        <form action="{{ route('medico.destroy', $medico->id) }}"
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
                                        <a href="{{ route('medico.edit', $medico->id) }}">

                                            <button type="button" class="btn btn-success">Editar</button></a>

                                        <a href="{{ route('medico.show', $medico->id) }}">
                                            <button type="button" class="btn btn-primary">Vizualizar</button></a>


                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>CRM</th>
                                <th>nome</th>
                                <th>Area De Atuacao</th>
                                <th>idade</th>
                                <th>telefone</th>
                                <th>email</th>
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

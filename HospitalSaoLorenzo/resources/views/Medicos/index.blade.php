@extends('single')
@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Medicos</h1>
        <a href="{{ route('medico.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus fa-sm text-white-50"></i> Novo</a>
    </div>

    <!-- Begin Page Content -->
    <div class="container-fluid">
        @if (session('mensagem'))
            <p style="color: green;">{{ session('mensagem') }}</p>
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
                                    <td><a href="{{ route('medico.show', $medico->id) }}">Visualizar</a><br>
                                        <a href="{{ route('medico.edit', $medico->id) }}">Editar</a><br>
                                        <form action="{{ route('medico.destroy', $medico->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <a href="#" onclick="this.closest('form').submit();return false;">Deletar</a>
                                        </form>
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

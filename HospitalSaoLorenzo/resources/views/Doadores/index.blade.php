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
                                    <td><a href="{{ route('doador.show', $doador->id) }}">Visualizar</a><br>
                                        <a href="{{ route('doador.edit', $doador->id) }}">Editar</a><br>
                                        <form action="{{ route('doador.destroy', $doador->id) }}" method="POST">
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

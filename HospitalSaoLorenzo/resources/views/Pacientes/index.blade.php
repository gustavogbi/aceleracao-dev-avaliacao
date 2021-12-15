@extends('single')
@section('content')

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Pacientes</h1>
                        <a href="{{route('pacientes.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Novo</a>
                    </div>

                    
                <!-- Begin Page Content -->
                <div class="container-fluid">
                @if (session('success'))
     <p style="color: green;">{{ session('success')}}</p>   
     @elseif(session('danger'))
     <p style="color: red;">{{ session('danger')}}</p>   
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
                    @foreach($pacientes as $paciente)
                    <tr>
                        <td>{{$paciente->id}}</td>
                        <td>{{$paciente->nome}}</td>
                        <td>{{$paciente->sobrenome}}</td>
                        <td>{{$paciente->idade}}</td>
                        <td>{{$paciente->endereco}}</td>
                        <td>{{$paciente->telefone}}</td>
                        <td>{{$paciente->email}}</td>
                        @if($paciente->is_doador) <td>Sim</td>
                        @else <td>Não</td>
                        @endif
                        <td>
                            <a href="{{route('pacientes.show', $paciente->id)}}">Mostrar</a>
                             | 
                            <form action="{{route('pacientes.destroy', $paciente->id)}}" method="post">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" href="{{route('pacientes.destroy', $paciente->id)}}">Excluir</button>
                            </form>
                             | 
                            <a href="{{route('pacientes.edit', $paciente->id)}}">Editar</a>
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
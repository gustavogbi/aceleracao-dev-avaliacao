@extends('single')
@section('content')

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Banco de sangue</h1>
                        <a href="/bancodesangue/novo" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Novo</a>
                    </div>

                    
                <!-- Begin Page Content -->
                <div class="container-fluid">
                @if (session('mensagem'))
     <p style="color: green;">{{ session('mensagem')}}</p>    
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
                        <th>Tipo</th>
                        <th>Contabilidade</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Tipo</th>
                        <th>Contabilidade</th>
                        <th>Ações</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach($bancodesangues as $bancodesangue)
                    <tr>
                        <td>{{$bancodesangue->id}}</td>
                        <td>{{$bancodesangue->tipo}}</td>
                        <td>{{$bancodesangue->contabilidade}} litros</td>
                        <td>Excluir | Editar</td>
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
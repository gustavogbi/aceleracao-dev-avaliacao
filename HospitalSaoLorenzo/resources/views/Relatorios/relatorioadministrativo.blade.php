@extends('single')
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-primary">Relatório Administrativo</h1>
</div>
<div class="row">
    
<div class="d-sm-flex align-items-center ">
<a href="/doador">   <h1 class="h3 mb-3 text-danger aling-center">Medicos</h1></a>
</div>
                        <div class="col-md-12">
                            <div class="card border-left-secondary shadow h-100 py-2 bg-white">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Medicos                                  </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-danger">{{$qtd_medicos}} Cadastros</div>
                                                </div>
                                                <div class="col">
                                                    <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-danger" role="progressbar"
                                                            style="width: {{$qtd_medicos*100}}px" aria-valuenow="50" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user-md fa-2x text-danger"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
        </div>
<div class="col-md-12">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered text-danger" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>CRM</th>
                                <th>Nome</th>
                                <th>Area De Atuacao</th>
                                <th>Idade</th>
                                <th>Telefone</th>
                                <th>Email</th>
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
                                   
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>CRM</th>
                                <th>Nome</th>
                                <th>Area De Atuacao</th>
                                <th>Idade</th>
                                <th>Telefone</th>
                                <th>Email</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
                        </div>
                        </div>

                        <div class="d-sm-flex align-items-center ">
                        <a href="/estagiario">    <h1 class="h3 mb-3 text-success aling-center">Estagiarios</h1></a>
</div>
                        <div class="col-md-12">
                            <div class="card border-left-secondary shadow h-100 py-2 bg-success">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-white text-uppercase mb-1">Estagiarios                                  </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-white">{{$qtd_estagiarios}} Cadastros</div>
                                                </div>
                                                <div class="col">
                                                    <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-primary" role="progressbar"
                                                            style="width:{{$qtd_estagiarios*100}}px" aria-valuenow="50" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-graduation-cap fa-2x text-white"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-12">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered text-success" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Grau de escolaridade</th>
                                <th>telefone</th>
                                <th>email</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($estagiarios as $estagiario)
                                <tr>
                                    <td>{{ $estagiario->id }}</td>
                                    <td>{{ $estagiario->nome }}</td>
                                    <td>{{ $estagiario->grauDeEscolaridade }}</td>
                                    <td>{{ $estagiario->telefone }}</td>
                                    <td>{{ $estagiario->email }}</td>
                                   
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Grau de escolaridade</th>
                                <th>telefone</th>
                                <th>email</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
                        </div>
                        </div>

</div>
@endsection
@extends('single')
@section('content')



    <div class="row">
        <div class="col-md-6">
            <div class="card bg-info text-danger shadow">
                <div class="card-body">
                    <a href="/relatorioadministrativo" class="text-white"> Relatório administrativo</a>
                    <div class="text-white small">Clique aqui para acessar o relatório administrativo</div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card bg-dark text-white shadow">
                <div class="card-body">
                    <a href="/relatoriodedoacoes" class="text-white">Relatório de doações</a>
                    <div class="text-white small">Clique acima para acessar o relatório de doações</div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="row">

        <div class="col-md-2">
            <div class="card border-left-secondary shadow h-100 py-2 bg-primary">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <a href="/pacientes">
                                <div class="text-xs font-weight-bold text-white text-uppercase mb-1">Pacientes
                                </div>
                            </a>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-white">{{ $bancodesangues }}</div>
                                </div>
                                <div class="col">
                                    <div class="progress progress-sm mr-2">
                                        <div class="progress-bar bg-primary" role="progressbar"
                                            style="width: {{ $bancodesangues }}px" aria-valuenow="50" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-wheelchair fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card border-left-secondary shadow h-100 py-2 bg-white">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <a href="/medico">
                                <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Medicos </div>
                            </a>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-danger">{{ $medicos }}</div>
                                </div>
                                <div class="col">
                                    <div class="progress progress-sm mr-2">
                                        <div class="progress-bar bg-dangerp" role="progressbar"
                                            style="width: {{ $medicos }}px" aria-valuenow="50" aria-valuemin="0"
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

        <div class="col-md-2">
            <div class="card border-left-secondary shadow h-100 py-2 bg-success">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <a href="/estagiario">
                                <div class="text-xs font-weight-bold text-white text-uppercase mb-1">Estagiarios </div>
                            </a>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-white">{{ $estagiarios }}</div>
                                </div>
                                <div class="col">
                                    <div class="progress progress-sm mr-2">
                                        <div class="progress-bar bg-primary" role="progressbar"
                                            style="width: {{ $estagiarios }}px" aria-valuenow="50" aria-valuemin="0"
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

        <div class="col-md-2">
            <div class="card border-left-secondary shadow h-100 py-2 bg-warning">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <a href="/doador">
                                <div class="text-xs font-weight-bold text-white text-uppercase mb-1">Doadores</div>
                            </a>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-white">{{ $doadores }}</div>
                                </div>
                                <div class="col">
                                    <div class="progress progress-sm mr-2">
                                        <div class="progress-bar bg-primary" role="progressbar"
                                            style="width: {{ $doadores }}px" aria-valuenow="50" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-h-square fa-2x text-white"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card border-left-secondary shadow h-100 py-2 bg-danger">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <a href="bancodesangue">
                                <div class="text-xs font-weight-bold text-white text-uppercase mb-1">Banco de sangue</div>
                            </a>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-white">{{ $bancodesangues }}</div>
                                </div>
                                <div class="col">
                                    <div class="progress progress-sm mr-2">
                                        <div class="progress-bar bg-primary" role="progressbar"
                                            style="width: {{ $bancodesangues }}px" aria-valuenow="50" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-heart fa-2x text-white"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card border-left-secondary shadow h-100 py-2 bg-secondary">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <a href="/doacoes">
                                <div class="text-xs font-weight-bold text-white text-uppercase mb-1">Doações</div>
                            </a>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-white">{{ $doacoes }}</div>
                                </div>
                                <div class="col">
                                    <div class="progress progress-sm mr-2">
                                        <div class="progress-bar bg-primary" role="progressbar"
                                            style="width: {{ $doacoes }}px" aria-valuenow="50" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-university fa-2x text-white"></i>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-md-12">
            <hr>
            <img src="/img/background.png" class="img-fluid">

        </div>
    </div>

@endsection

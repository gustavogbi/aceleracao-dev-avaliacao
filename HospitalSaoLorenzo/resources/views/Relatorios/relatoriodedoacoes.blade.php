@extends('single')
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-primary">Relatório de doações</h1>
</div>
<div class="row">
    
<div class="d-sm-flex align-items-center ">
       <a href="/doador"> <h1 class="h3 mb-3 text-warning aling-center">Doadores</h1></a>
</div>
                        <div class="col-md-12">
                            <div class="card border-left-secondary shadow h-100 py-2 bg-warning">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-white text-uppercase mb-1">Doadores                                  </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-white">{{$qtd_doadores}} Cadastros</div>
                                                </div>
                                                <div class="col">
                                                    <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-primary" role="progressbar"
                                                            style="width: {{$qtd_doadores*100}}px" aria-valuenow="50" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user-md fa-2x text-white"></i>
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
                <table class="table table-bordered text-warning" id="dataTable" width="100%" cellspacing="0">
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
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
                        </div>
                        </div>

                        <div class="d-sm-flex align-items-center ">
                        <a href="/bancodesangue">    <h1 class="h3 mb-3 text-danger aling-center">Banco de Sangue</h1></a>
</div>
                        <div class="col-md-12">
                            <div class="card border-left-secondary shadow h-100 py-2 bg-danger">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-white text-uppercase mb-1">Banco de sangue                                  </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-white">{{$qtd_bancodesangues}} Cadastros</div>
                                                </div>
                                                <div class="col">
                                                    <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-primary" role="progressbar"
                                                            style="width:{{$qtd_bancodesangues*100}}px" aria-valuenow="50" aria-valuemin="0"
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
                <table class="table table-bordered text-danger" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tipo</th>
                            <th>Contabilidade</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Tipo</th>
                            <th>Contabilidade</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($bancodesangues as $bancodesangue)
                        <tr>
                            <td>{{$bancodesangue->id}}</td>
                            <td>{{$bancodesangue->tipo}}</td>
                            <td>{{$bancodesangue->contabilidade}} litros</td>
                           
                        @endforeach
                    </tbody>
                </table>
                </div>
            </div>
                        </div>
                        </div>


                        <div class="d-sm-flex align-items-center ">
                        <a href="/doacoes">   <h1 class="h3 mb-3 text-dark aling-center">Doações</h1></a>
</div>
                        <div class="col-md-12">
                            <div class="card border-left-secondary shadow h-100 py-2 bg-dark">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-white text-uppercase mb-1">Doações                                </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-white">{{$qtd_doacoes}} Cadastro(s)</div>
                                                </div>
                                                <div class="col">
                                                    <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-primary" role="progressbar"
                                                            style="width:{{$qtd_doacoes*100}}px" aria-valuenow="50" aria-valuemin="0"
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
            <div class="card-body ">
             
                            @foreach ($doacoes as $doacao)

                           <strong class="text-danger">Doação #{{$doacao->id}}. </strong>
                            <p class="text-dark"> Feito doação  de {{$doacao->qtd_litros}} litros por 
                            {{$doacao->nome}}, telefone {{$doacao->telefone}}, 
                            email {{$doacao->email}} na data de {{ \Carbon\Carbon::parse($doacao->created_at)->format('d/m/Y')}}  </p>

                            @endforeach
                           
            </div>
                        </div>
                        </div>

</div>
@endsection
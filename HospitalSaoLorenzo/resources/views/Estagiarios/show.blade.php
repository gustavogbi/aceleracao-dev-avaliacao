@extends('single')
@section('content')

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Estagiario</h1>
                        <a href="/estagiario" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-view fa-sm text-white-50"></i> Estagiários</a>
                    </div>

                    <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Detalhes do registro #{{$estagiario->id}}</h6>
                                </div>
                                <div class="card-body">
                                    <p>Id:  {{$estagiario->id}}</p>
                                    <p>Nome : {{$estagiario->nome}}</p> 
                                    <p>Grau de escolaridade:  {{$estagiario->grauDeEscolaridade}}</p> 
                                    <p>Telefone:  {{$estagiario->telefone}}</p> 
                                    <p>Email:  {{$estagiario->email}}</p> 
                                    <p>Data de cadastro:  {{$estagiario->created_at}}</p> 
                                    <p>Ultima atualização:  {{$estagiario->updated_at}}</p> 
                                </div>
                            </div>
@endsection
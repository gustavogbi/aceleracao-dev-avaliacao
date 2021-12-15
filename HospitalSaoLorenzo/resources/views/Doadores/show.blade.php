@extends('single')
@section('content')

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Doador</h1>
                        <a href="/doador" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-view fa-sm text-white-50"></i> Doadores</a>
                    </div>

                    <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Detalhes do registro #{{$doador->id}}</h6>
                                </div>
                                <div class="card-body">
                                    <p>Id:  {{$doador->id}}</p>
                                    <p>Nome : {{$doador->nome}}</p> 
                                    <p>Telefone:  {{$doador->telefone}}</p> 
                                    <p>Email:  {{$doador->email}}</p> 
                                    <p>Peso:  {{$doador->peso}}</p> 
                                    <p>Altura:  {{$doador->altura}}</p> 
                                    <p>Fumante:  {{$doador->fumante}}</p> 
                                    <p>Doenças:  {{$doador->doencas}}</p>                                     
                                    <p>Observações:  {{$doador->observacoes}}</p> 
                                    <p>Data de cadastro:  {{$doador->created_at}}</p> 
                                    <p>Ultima atualização:  {{$doador->updated_at}}</p> 
                                </div>
                            </div>
@endsection
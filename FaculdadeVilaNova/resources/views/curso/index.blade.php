@extends('layouts.single')
@section('content')
    <div class="container">
        <div class="row ">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Cursos</div>

                    <div class="card-body">
                        <a href="{{ route('cursos.create') }}"><button type="button" class="btn btn-success tet-white">
                                <i class="fa fa-plus"></i> Novo</button></a>

                    </div>
                </div>
            </div>
        </div>
        <div class="row ">
            <div class="col-md-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th>Nome</th>
                            <th>Quant. Max.</th>
                            <th>Descrição</th>
                            <th>Categoria</th>
                            <th>Mensalidade</th>
                            <th>Data Criação</th>
                            <th>Data Atualização</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cads as $cad)
                            <tr>
                                <td>{{ $cad->id }} </td>
                                <td>{{ $cad->nomedocurso }} </td>
                                <td>{{ $cad->qntmax }} </td>
                                <td>{{ $cad->descricao }} </td>
                                <td>{{ $cad->datacriacao }} </td>
                                <td>{{ $cad->dataupdate }} </td>
                                <td>{{ $cad->categoria }} </td>
                                <td>{{ $cad->mensalidade }} </td>
                                <td>{{ $cad->status }} </td>
                                <td>
<<<<<<< HEAD
                                <button data-bs-toggle="collapse" data-bs-target="#cad{{$cad->id}}"  class="btn btn-primary">Ações</button>

<div id="cad{{$cad->id}}" class="collapse">
<a class="dropdown-item" href="{{ route('cursos.show', $cad->id) }}"><button type="button" class="btn btn-info"><i class="far fa-eye"></i></button></a>
    <a class="dropdown-item" href="{{ route('cursos.edit', $cad->id) }}"><button type="button" class="btn btn-primary"><i class="far fa-edit"></i></button></a>
    <a class="dropdown-item"><button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{$cad->id}}">
 <i class="far fa-trash-alt"></i>
</button></a>
</div>


                              
<!-- The Modal -->
<div class="modal" id="delete{{$cad->id}}">
  <div class="modal-dialog">
    <div class="modal-content">

    <div class="modal-header">
        <h4 class="modal-title">Tem certeza que deseja deletar este registro?</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal">X</button>
      </div>
      <!-- Modal body -->
      <div class="modal-body">
      <form action="{{ route('cursos.destroy', $cad->id) }}" method="POST">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="_token" value="{{csrf_token()}}"> 
                    
        <button type="button" class="btn btn-info" data-bs-dismiss="modal">Não, Cancelar</button>
                    <button type="submit" class="btn btn-danger">Sim, deletar</button>
                 </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
      </div>

    </div>
  </div>
</div>
=======
                                    <a href="{{ route('cursos.show', $cad->id) }}"><button type="button"
                                            class="btn btn-primary"><i class="far fa-eye"></i></button></a>
                                    <a href="{{ route('cursos.edit', $cad->id) }}"><button type="button"
                                            class="btn btn-primary"><i class="far fa-edit"></i></button></a>
                                    <form action="{{ route('cursos.destroy', $cad->id) }}" method="POST">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="btn btn-danger"><i
                                                class="far fa-trash-alt"></i></button>
                                    </form>
>>>>>>> 551a84ff812aca9fe172ceeda01ab2ff38e74c10
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endsection

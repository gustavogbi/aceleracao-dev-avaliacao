@extends('layouts.single')
@section('content')
<div class="container">
  <div class="row ">
      <div class="col-md-12">
          <div class="card">
              <div class="card-header">Professores</div>

              <div class="card-body">
              <a href="{{route('professor.create') }}"><button type="button" class="btn btn-success tet-white">
                <i class="fa fa-plus"></i> Novo</button></a>
            
              </div>
          </div>
      </div>
  </div>
</div>
<div class="container">
  @include('layouts.alerts')
    <div class="row ">
        <div class="col-md-12">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">NOME</th>
              <th scope="col">MATRICULA</th>
              <th scope="col">COMPETENCIA</th>
              <th scope="col">ESCOLARIDADE</th>
              <th>Ações</th>
            </tr>
          </thead>
          <tbody>
              @foreach($cads as $cad)
            <tr>
              <td>{{ $cad->id }} </td>
              <td>{{ $cad->nome }} </td>
              <td>{{ $cad->matricula }} </td>
              <td>{{ $cad->competencia}} </td>
              <td>{{ $cad->escolaridade }} </td>
              <td>
                <a href="{{route("professor.show", $cad->id ) }}"><button type="button" class="btn btn-primary"><i class="far fa-eye"></i></button></a>
                <a href="{{route('professor.edit', $cad->id ) }}"><button type="button" class="btn btn-primary"><i class="far fa-edit"></i></button></a>
                <form action="{{ route('professor.destroy', $cad->id) }}" method="POST">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="_token" value="{{csrf_token()}}"> 
                    <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                 </form>
              </td>
            </tr>
              @endforeach
          </tbody>
        </table>

        @include('layouts/paginate')

    </div>
</div>
@endsection
@extends('layouts.single')
@section('content')

<div class="container">
    <div class="row ">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Planos Financeiros</div>

                <div class="card-body">
                <a href="{{route('planos-financeiros.create') }}"><button type="button" class="btn btn-success tet-white">
                  <i class="fa fa-plus"></i> Novo</button></a>
              
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row ">
        <div class="col-md-12">
          <div class="row">
          </div>
          @if (session('success'))
            <p style="color:green;">{{ session('success') }}</p>
          @elseif (session('danger'))
            <p style="color:red;">{{ session('danger') }}</p>
          @endif
        <table class="table table-bordered">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th>Nome</th>
              <th>Desconto</th>
              <th>Observação</th>
              <th>Ações</th>
            </tr>
          </thead>
          <tbody>
              @foreach($cads as $cad)
            <tr>
              <td>{{ $cad->id }}</td>
              <td>{{ $cad->nome }}</td>
              <td>{{ $cad->desconto }}%</td>
              <td>{{ $cad->observacao }}</td>
              <td>
                <a href="{{route("planos-financeiros.show", $cad->id ) }}"><button type="button" class="btn btn-primary"><i class="far fa-eye"></i></button></a>
                <a href="{{route('planos-financeiros.edit', $cad->id ) }}"><button type="button" class="btn btn-primary"><i class="far fa-edit"></i></button></a>
                <form action="{{ route('planos-financeiros.destroy', $cad->id) }}" method="POST">
                  <input type="hidden" name="_method" value="DELETE">
                  <input type="hidden" name="_token" value="{{csrf_token()}}"> 
                  <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                </form>
              </td>
            </tr>
              @endforeach
          </tbody>
        </table>
    </div>
</div>
@endsection
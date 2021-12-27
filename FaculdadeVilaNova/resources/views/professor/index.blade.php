@extends('layouts.single')
@section('content')
<div class="container">
    <div class="row ">
        <div class="col-md-12">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th scope="col">NOME</th>
              <th>Ações</th>
            </tr>
          </thead>
          <tbody>
              @foreach($cads as $cad)
            <tr>
              <td>{{ $cad->nome }} </td>
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
    </div>
</div>
@endsection
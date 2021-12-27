@extends('layouts.single')
@section('content')
    <div class="container">
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
                                    <a href="{{ route('cursos.show', $cad->id) }}"><button type="button"
                                            class="btn btn-primary"><i class="far fa-eye"></i></button></a>
                                    <a href="{{ route('cursos.edit', $cad->id) }}"><button type="button"
                                            class="btn btn-primary"><i class="far fa-edit"></i></button></a>
                                    <form action="{{ route('cursos.destroy', $cad->id) }}" method="POST">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
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

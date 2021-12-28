@extends('layouts.single')
@section('content')
    <div class="container">
        <div class="row ">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Dados</div>
                    @include('layouts.alerts')
                    <div class="card-body">
                        <form action="{{ route('cursos.store') }}" method="post">
<<<<<<< HEAD
                            @method('PUT')
=======
>>>>>>> 551a84ff812aca9fe172ceeda01ab2ff38e74c10
                            @include('curso.form')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

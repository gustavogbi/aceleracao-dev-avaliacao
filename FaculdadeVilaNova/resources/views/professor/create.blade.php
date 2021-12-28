@extends('layouts.single')
@section('content')

<div class="container">
    <div class="row ">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dados</div>
                @include('layouts.alerts')
                <div class="card-body">
                   <form action="{{ route('professor.store')}}" method="post">
                    @method('POST')
                    @include('professor.form')
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
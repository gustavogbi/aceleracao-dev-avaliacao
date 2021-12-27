@extends('layouts.single')
@section('content')

<div class="container">
    <div class="row ">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dados</div>

               <div class="card-body">
               Nome: {{$cad->nome}} <br>
               Matricula: {{$cad->matricula}} <br>
               Data de nascimento: {{$cad->idatanascimentod}} <br>
               Responsável: {{$cad->responsavelFinanceiro}} <br>            
               </div>
            </div>
        </div>
    </div>
</div>
@endsection
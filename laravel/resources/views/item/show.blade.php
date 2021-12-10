@include('includes.header')
    <div class="container">
        <h1 class="text-primary text-center">
                Item
        </h1>

        <ul class="list-group list-group-flush text-center">
            <h3><li class="list-group-item">ID: {{$item->id}}</li></h3>
            <h3><li class="list-group-item">Item: {{$item->item}}</li></h3>
            <h3><li class="list-group-item">Marca: {{$item->quantidade}}</li></h3>
            <h3><li class="list-group-item">Garantia: {{$item->garantia ? 'Sim' : "Não"}}</li></h3>
            <h3><li class="list-group-item">Uso aproximado de 20 dias: {{ $item->quantidade / 20 }}</li></h3>
        </ul>

        <div class="row d-flex justify-content-center mt-2">
            <a href="{{route('itens')}}" class="btn btn-primary col-6">Listar Todos os itens</a>
        </div>
    </div>

@include('includes.footer')

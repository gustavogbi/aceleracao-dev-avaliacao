<h1>Itens</h1>
<br>
<ul>
@foreach ($items as $item)
<li>ID: {{ $item->id }} Item: <a href="{{route('item.show', $item->id)}}"> {{ $item->item }}</a></li>
@endforeach
</ul>

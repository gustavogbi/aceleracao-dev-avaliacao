<p>ID: {{ $item->id }}</p>
<p>Item: {{ $item->item }}</p>
<p>Quantidade: {{ $item->quantidade }}</p>
<p>Marca: {{ $item->marca }}</p>
<p>Garantia: {{ $item->garantia }}</p>
<p>Qnt aproximada de uso por dia durante um período de 20 dias: {{ $item->quantidade / 20 }}</p>

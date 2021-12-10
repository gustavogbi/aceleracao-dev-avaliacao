@include('includes.header')
    <div class="container">
        <table class="table table-bordered mt-5">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Item</th>
                </tr>
            </thead>
            @foreach ($items as $item)
                <tbody>
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->item}}</td>
                        <td class="text-center"><a href="{{route('item.show', $item->id)}}"><button type="button" class="btn btn-primary"><i class="far fa-eye"></i></button></a></td>
                    </tr>
                </tbody>
            @endforeach
        </table>
    </div>

@include('includes.footer')

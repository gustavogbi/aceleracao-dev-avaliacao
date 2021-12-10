@include('includes.header')
    <div class="container">
        <table class="table table-bordered mt-5">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Funcionario</th>
                <th scope="col">Função</th>
                </tr>
            </thead>
            @foreach ($employers as $employer)
                <tbody>
                    <tr>
                        <td>{{$employer->id}}</td>
                        <td>{{$employer->name}}</td>
                        <td>{{$employer->jobRole}}</td>
                        <td class="text-center"><a href="{{route('funcionario.show', $employer->id)}}"><button type="button" class="btn btn-primary"><i class="far fa-eye"></i></button></a></td>
                    </tr>
                </tbody>
            @endforeach
        </table>
    </div>

@include('includes.footer')

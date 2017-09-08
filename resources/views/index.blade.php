@extends('layout')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-hover table-condensed">
                    <thead>
                    <tr>
                        <th>
                            #
                        </th>
                        <th>
                            Nome
                        </th>
                        <th>
                            Telefone
                        </th>
                        <th>
                            Ação
                        </th>
                    </tr>
                    @foreach($clientes as $client)

                    </thead>
                    <tbody>
                    <tr>
                        <td>
                          {{$client->id}}
                        </td>
                        <td>
                            {{$client->nome}}
                        </td>
                        <td>
                           {{$client->telefone}}
                        </td>
                        <td>
                            <a href="/visualizar/{{$client->id}}">visualizar</a>
                            <a href="/delete/{{$client->id}}">deletar</a>
                        </td>
                    </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>



@endsection

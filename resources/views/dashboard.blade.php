@extends('base')
@section('conteudo')
    @if (request()->get('msg'))
        <small style="color:green">{{ request()->get('msg') }}</small>
    @endif

    <table class="table">
        <tr>
            <th>Nome</th>
            <th>Cidade</th>
            <th>Estado</th>
            <th>Status</th>
            <th></th>
        </tr>

        @foreach ($mensagens as $item)
            <tr>
                <td>{{ $item->nome_do_aluno }}</td>
                <td>{{ $item->cidade }}</td>
                <td>{{ $item->estado }}</td>
                <td>{{ $item->status }}</td>
                <td><a href="/responder/{{ $item->id }}">responder</a></td>
            </tr>
        @endforeach
    </table>
@endsection

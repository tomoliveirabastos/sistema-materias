@extends('base')
@section('conteudo')
    @if (request()->get('msg'))
        <small style="color:green">{{ request()->get('msg') }}</small>
    @endif

    <h1>Response mensagem</h1>
    <form action="/responder/{{ $mensagem->id }}" method='POST'>
        @csrf

        <label for="">Whatsapp</label>
        <input class="form-control" name="whatsapp" value="{{ $mensagem->whatsapp }}" />

        <label for="">Cidade</label>
        <input class="form-control" name="cidade" value="{{ $mensagem->cidade }}" />

        <label for="">Estado</label>
        <input class="form-control" name="estado" value="{{ $mensagem->estado }}" />

        <label for="">Nome</label>
        <input class="form-control" name="nome_do_aluno" value="{{ $mensagem->nome_do_aluno }}" />

        <div>
            <h5>Descrição</h5>
            <strong><i>{{ $mensagem->mensagem }}</i></strong>
        </div>


        <label for="">Escreva sua resposta</label>
        <textarea class="form-control" name="resposta">{{ $mensagem->resposta }}</textarea>
        <button class="btn btn-primary">Enviar</button>
    </form>

    <a href="/dashboard">Voltar</a>
@endsection

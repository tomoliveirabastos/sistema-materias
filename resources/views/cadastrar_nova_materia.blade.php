@extends('base')
@section('conteudo')
    <div class="col-4">
        <form action="/{{ request()->path() }}" method="POST">
            <label>Nome da materia</label>
            <input class="form-control" type="text" name="materia" required>
            <button class="btn btn-primary">Cadastrar</button>
            <a href="/">voltar</a>
        </form>
    </div>
@endsection

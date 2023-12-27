@extends('base')
@section('conteudo')
    @if (request()->get('error'))
        <label style="color: red">{{ request()->get('error') }}</label>
    @endif
    <h1>Sistema de professores</h1>
    <div class="col-4">
        <form action="/login" method="POST">
            <label for="">Email</label>
            <input required type="text" class="form-control" name="email" />

            <label for="">Senha</label>
            <input required type="password" class="form-control" name="password" />

            <button class="btn btn-primary" type="submit">Logar</button>

            <br>
            <a href="/cadastrar">Cadastrar professor</a>

            <br>
            <a href="/nova_mensagem">Nova mensagem</a>

            <br>
            <a href="/cadastrar_nova_materia">Nova Materia</a>

        </form>
    </div>
@endsection

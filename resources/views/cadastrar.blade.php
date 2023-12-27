@extends('base')
@section('conteudo')
    <div class="col-3">
        <h1>Cadastrar novo professor</h1>
        <form action="/{{ request()->path() }}" method='POST'>
            <label for="">email</label>
            <input required type="text" name="email" class="form-control">

            <label for="">nome</label>
            <input required type="text" name="name" class="form-control">

            <label for="">senha</label>
            <input required type="password" name="password" class="form-control">

            <label for="">Selecione as materias do professor</label>
            <select required class="form-control" name="materia_id" id="">
                @foreach ($materias as $item)
                    <option value="{{$item->id}}">{{$item->materia}}</option>
                @endforeach
            </select>

            <br>
            <button class="btn btn-primary" type="submit">Cadastrar</button>
            <a href="/">voltar</a>
        </form>
    </div>
@endsection

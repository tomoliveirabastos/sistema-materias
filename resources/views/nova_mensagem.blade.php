@extends('base')
@section('conteudo')
    <div class="col-4">
        <form action="/{{ request()->path() }}" method="POST">
            <label for="">Nome completo</label>
            <input required name="nome_do_aluno" class="form-control" />

            <label for="">Whatsapp</label>
            <input required name="whatsapp" class="form-control" />

            <label for="">Nascimento</label>
            <input required  type="date" name="nascimento" class="form-control" />

            <label for="">Cidade</label>
            <input required  name="cidade" class="form-control" />

            <label for="">Estado</label>
            <input required  name="estado" class="form-control" />

            <label for="">Materia</label>
            <select required class="form-control" name="materia_id" id="">
                @foreach ($materias as $item)
                    <option value="{{ $item->id }}">{{ $item->materia }}</option>
                @endforeach
            </select>

            <label for="">Descrição</label>
            <textarea class="form-control" name="mensagem" id="" cols="30" rows="10"></textarea>

            <button type="submit" class="btn btn-primary">Enviar</button>
            <a href="/">voltar</a>
        </form>
    </div>
@endsection

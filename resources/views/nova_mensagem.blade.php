<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <div class="col-4">
            <form action="/{{ request()->path() }}" method="POST">
                <label for="">Nome completo</label>
                <input required name="nome_do_aluno" class="block mt-1 w-full" />

                <label for="">Whatsapp</label>
                <input required name="whatsapp" class="block mt-1 w-full" />

                <label for="">Nascimento</label>
                <input required type="date" name="nascimento" class="block mt-1 w-full" />

                <label for="">Cidade</label>
                <input required name="cidade" class="block mt-1 w-full" />

                <label for="">Estado</label>
                <input required name="estado" class="block mt-1 w-full" />

                <label for="">Materia</label>
                <select required class="block mt-1 w-full" name="materia_id" id="">
                    @foreach ($materias as $item)
                        <option value="{{ $item->id }}">{{ $item->materia }}</option>
                    @endforeach
                </select>

                <label for="">Descrição</label>
                <textarea class="block mt-1 w-full" name="mensagem" id="" cols="30" rows="10"></textarea>

                <br>
                <x-button type="submit" class="btn btn-primary">Enviar</x-button>
                <a href="/">voltar</a>
            </form>
        </div>
    </x-authentication-card>
</x-guest-layout>

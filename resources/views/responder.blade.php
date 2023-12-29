<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Responder mensagem') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <form style="padding:20px;" action="/responder/{{ $mensagem->id }}" method='POST'>
                    @csrf

                    <label for="">Whatsapp</label>
                    <input class="block mt-1 w-full" name="whatsapp" value="{{ $mensagem->whatsapp }}" />

                    <label for="">Cidade</label>
                    <input class="block mt-1 w-full" name="cidade" value="{{ $mensagem->cidade }}" />

                    <label for="">Estado</label>
                    <input class="block mt-1 w-full" name="estado" value="{{ $mensagem->estado }}" />

                    <label for="">Nome</label>
                    <input class="block mt-1 w-full" name="nome_do_aluno" value="{{ $mensagem->nome_do_aluno }}" />

                    <div>
                        <h5>Descrição</h5>
                        <strong><i>{{ $mensagem->mensagem }}</i></strong>
                    </div>


                    <label for="">Escreva sua resposta</label>
                    <textarea class="block mt-1 w-full" name="resposta">{{ $mensagem->resposta }}</textarea>
                    <br>
                    <x-button class="btn btn-primary">Enviar</x-button>
                    <a href="/dashboard">Voltar</a>
                </form>
            </div>
        </div>
    </div>

</x-app-layout>

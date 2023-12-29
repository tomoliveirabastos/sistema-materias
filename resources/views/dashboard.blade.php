<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @if (request()->get('msg'))
                    <small style="color:green">{{ request()->get('msg') }}</small>
                @endif

                <table style="width:100%;margin:10px;">
                    <tr>
                        <th align="left">Nome</th>
                        <th align="left">Cidade</th>
                        <th align="left">Estado</th>
                        <th align="left">Status</th>
                        <th align="left"></th>
                    </tr>

                    @foreach ($mensagens as $item)
                        <tr>
                            <td>{{ $item->nome_do_aluno }}</td>
                            <td>{{ $item->cidade }}</td>
                            <td>{{ $item->estado }}</td>
                            <td>{{ $item->status }}</td>
                            <td><a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="/responder/{{ $item->id }}">responder</a></td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</x-app-layout>

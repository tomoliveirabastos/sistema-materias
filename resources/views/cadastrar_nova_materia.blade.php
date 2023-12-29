<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <div class="col-4">
            <form action="/{{ request()->path() }}" method="POST">
                <label>Nome da materia</label>
                <input class="block mt-1 w-full" type="text" name="materia" required>
                <br>
                <x-button>Cadastrar</x-button>
                <a href="/">voltar</a>
            </form>
        </div>

    </x-authentication-card>
</x-guest-layout>

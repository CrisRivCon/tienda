<x-app-layout>
    <div class="w-1/2 mx-auto">
        <form method="POST" action="{{ route('ivas.update', ['iva' => $iva]) }}">
            @csrf
            @method('PUT')
            <div>
                <x-input-label for="tipo" :value="'Tipo de iva:'" />
                <x-text-input id="tipo" class="block mt-1 w-full"
                    type="text" name="tipo" :value="old('tipo', $iva->tipo)" required
                    autofocus autocomplete="tipo" />
                <x-input-error :messages="$errors->get('tipo')" class="mt-2" />
            </div>
            <div>
                <x-input-label for="por" :value="'Porcentaje:'" />
                <x-text-input id="por" class="block mt-1 w-full"
                    type="text" name="por" :value="old('por', $iva->por)" required
                    autofocus autocomplete="por" />
                <x-input-error :messages="$errors->get('por')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a href="{{ route('ivas.index') }}">
                    <x-secondary-button class="ms-4">
                        Volver
                        </x-primary-button>
                </a>
                <x-primary-button class="ms-4">
                    Editar
                </x-primary-button>
            </div>
        </form>
    </div>
</x-app-layout>

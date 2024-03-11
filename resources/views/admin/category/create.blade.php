<x-app-layout>
    <x-bree-bar.container>
        <x-bree-bar.form :action="route('categories.store')" has-files method="POST">

            {{-- <x-slot name="title">Registrar categoria</x-slot>
            <x-slot name="description">Formulario para el registro de categorias</x-slot> --}}
            <x-bree-bar.label for="name" value="Nombre" />
            <x-bree-bar.input type="text" name="name" id="name" value="{{ old('name') }}" />



            <div class="flex justify-start gap-4">
                <x-bree-bar.button-store>{{ __('Registrar') }}</x-bree-bar.button-store>
                <x-bree-bar.button-cancel :href="route('categories.index')">{{ __('Cancelar') }}</x-bree-bar.button-cancel>
            </div>
        </x-bree-bar.form>

    </x-bree-bar.container>
</x-app-layout>

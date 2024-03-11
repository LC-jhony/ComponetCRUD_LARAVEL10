<x-app-layout>
    <x-bree-bar.container>

        <x-bree-bar.form-layout>
            <x-slot name="title">Registrar Categoria</x-slot>
            <x-slot name="description">Ingrese los datos para actualizar la categoria</x-slot>
            <x-slot name="form">
                <x-bree-bar.form :action="route('categories.update', $category->id)" method="POST">
                    @method('put')
                    <x-bree-bar.label for="name" value="Nombre" />
                    <x-bree-bar.input type="text" name="name" id="name" value="{{ $category->name }}" />
                    <div class="mt-4">
                        <span class="block mb-3 text-sm font-medium text-gray-700">Estado</span>
                        <div class="grid gap-2 sm:grid-cols-2">
                            <label for="status"
                                class="flex w-full p-3 text-sm bg-white border border-gray-200 rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
                                <input type="radio" name="status" value="1"
                                    class="shrink-0 mt-0.5 border-gray-200 rounded-full text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                    id="status">
                                <span class="text-sm text-gray-500 ms-3 dark:text-gray-400">Activar</span>
                            </label>

                            <label for="status"
                                class="flex w-full p-3 text-sm bg-white border border-gray-200 rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
                                <input type="radio" name="status" value="0"
                                    class="shrink-0 mt-0.5 border-gray-200 rounded-full text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                    id="status" checked>
                                <span class="text-sm text-gray-500 ms-3 dark:text-gray-400">Desactivar</span>
                            </label>
                        </div>
                    </div>
                    <div class="flex justify-start gap-4">
                        <x-bree-bar.button-store>{{ __('Registrar') }}</x-bree-bar.button-store>
                        <x-bree-bar.button-cancel :href="route('categories.index')">{{ __('Cancelar') }}</x-bree-bar.button-cancel>
                    </div>
                </x-bree-bar.form>
            </x-slot>

        </x-bree-bar.form-layout>
    </x-bree-bar.container>
</x-app-layout>

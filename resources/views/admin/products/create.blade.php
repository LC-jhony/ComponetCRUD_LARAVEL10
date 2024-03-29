<x-app-layout>
    <x-bree-bar.container>

        <x-bree-bar.form-layout>
            <x-slot name="title">Registrar Categoria</x-slot>
            <x-slot name="description">Ingrese los datos para actualizar la categoria</x-slot>
            <x-slot name="form">
                <x-bree-bar.form :action="route('products.store')" method="POST">
                    <div class="grid gap-2 mb-4 sm:grid-cols-2">
                        <div>
                            <x-bree-bar.label for="code" value="Codigo" />
                            <x-bree-bar.input type="text" name="code" id="code" />
                        </div>
                        <div>
                            <x-bree-bar.label for="name" value="Nombre" />
                            <x-bree-bar.input type="text" name="name" id="name" />
                        </div>
                    </div>
                    <div class="grid gap-2 mb-4 sm:grid-cols-2">
                        <div>
                            <x-bree-bar.label for="quantity" value="Cantidad" />
                            <x-bree-bar.input type="text" name="quantity" id="quantity" />
                        </div>
                        <div>
                            <x-bree-bar.label for="price" value="Precio" />
                            <x-bree-bar.input type="text" name="price" id="price" />
                        </div>
                    </div>
                    <div class="grid gap-3 sm:grid-cols-3">
                        <div>
                            <x-bree-bar.label for="um" value="U.M" />
                            <x-bree-bar.input type="text" name="um" id="um" />
                        </div>
                        <div>
                            <x-bree-bar.label for="oc" value="O/C" />
                            <x-bree-bar.input type="text" name="oc" id="oc" />
                        </div>
                        <div>
                            <x-bree-bar.label for="category_id" value="Categoria" />
                            <select name="category_id" id="category_id"
                                class="block w-full px-4 py-3 text-sm border-gray-200 rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
                                <option>Seleccione categoria</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>

                        </div>
                    </div>
                    <div class="flex justify-start gap-4">
                        <x-bree-bar.button-store>{{ __('Registrar') }}</x-bree-bar.button-store>
                        <x-bree-bar.button-cancel :href="route('products.index')">{{ __('Cancelar') }}</x-bree-bar.button-cancel>
                    </div>
                </x-bree-bar.form>
            </x-slot>

        </x-bree-bar.form-layout>
    </x-bree-bar.container>
</x-app-layout>

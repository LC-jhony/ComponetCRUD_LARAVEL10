<x-app-layout>

    <x-bree-bar.container>

        <x-bree-bar.table-container>
            <x-slot name="header">
                <x-bree-bar.table-header>
                    <x-slot name="search">
                        <form action="{{ route('categories.index') }}" method="GET">
                            <div class="flex items-center">
                                <input placeholder="Search" type="text" name='search' id="search"
                                    class="block w-full transition duration-150 ease-in-out border-gray-300 shadow-sm rounded-l-md sm:text-sm sm:leading-5 dark:bg-gray-700 dark:text-white dark:border-gray-600 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 ">
                                <button type="submit"
                                    class="p-1 py-1.5 text-white bg-blue-800 rounded-r-md hover:bg-blue-700">Buscar</button>
                            </div>
                        </form>
                    </x-slot>
                    <x-slot name="filter">
                        {{-- actions filters --}}
                    </x-slot>
                    <x-slot name="action">
                        <x-bree-bar.create-button href="{{ route('categories.create') }}">Registrar
                            categoria</x-bree-bar.create-button>
                    </x-slot>
                </x-bree-bar.table-header>
            </x-slot>
            <x-slot name="content">
                <x-bree-bar.table :headers="['id', 'nombre', 'status', 'Fecha', ['name' => 'Acciones', 'align' => 'center']]">
                    @forelse ($categories as $category)
                        <tr class="bg-white dark:bg-gray-700 dark:text-white ">
                            <x-bree-bar.td>{{ $category->id }}</x-bree-bar.td>
                            <x-bree-bar.td>{{ $category->name }}</x-bree-bar.td>
                            <x-bree-bar.td>
                                @if ($category->status == 1)
                                    <span
                                        class="py-1.5 px-2.5 border-none rounded bg-indigo-100 text-indigo-500">Activo</span>
                                @else
                                    <span
                                        class="py-1.5 px-2.5 border-none rounded bg-rose-100 text-rose-500">Inactivo</span>
                                @endif
                            </x-bree-bar.td>
                            <x-bree-bar.td>{{ $category->created_at }}</x-bree-bar.td>
                            <x-bree-bar.td align="center">
                                <div class="flex justify-center gap-3">
                                    <x-bree-bar.edit-button href="{{ route('categories.edit', $category->id) }}">
                                        editar</x-bree-bar.edit-button>{{-- <x-bree-bar.view-button href="#">Ver</x-bree-bar.view-button> --}}
                                    <x-bree-bar.delete-button :action="route('categories.delete', $category->id)">Eliminar</x-bree-bar.delete-button>
                                </div>
                            </x-bree-bar.td>
                        </tr>
                    @empty
                        <x-bree-bar.td colspan=" flex justify-center">No existen categorias
                            registradas</x-bree-bar.td>
                    @endforelse

                </x-bree-bar.table>
            </x-slot>
            <x-slot name="footer">{{ $categories->links() }}</x-slot>
        </x-bree-bar.table-container>

    </x-bree-bar.container>
</x-app-layout>

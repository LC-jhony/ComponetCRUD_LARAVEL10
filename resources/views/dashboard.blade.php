<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <x-bree-bar.table :headers="[
                        'id',
                        'name',
                        'phone',
                        'salary',
                        'age',
                        'gender',
                        'Fecha registro',
                        ['name' => 'accion', 'align' => 'center'],
                    ]">
                        <tr class="bg-white dark:bg-gray-700 dark:text-white ">
                            <x-bree-bar.td>1</x-bree-bar.td>
                            </x-table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

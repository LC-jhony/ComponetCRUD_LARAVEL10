<x-app-layout>

    <x-bree-bar.container>

        <x-bree-bar.table-container>
            <x-slot name="header">
                <x-bree-bar.table-header>
                    <x-slot name="search">
                    </x-slot>
                    <x-slot name="filter">
                        {{-- actions filters --}}
                    </x-slot>
                    <x-slot name="action">
                        <x-bree-bar.create-button href="{{ route('outputs.create') }}">Registrar
                            categoria</x-bree-bar.create-button>
                    </x-slot>
                </x-bree-bar.table-header>
            </x-slot>
            <x-slot name="content">
                <livewire:output-table />
            </x-slot>
            <x-slot name="footer"></x-slot>
        </x-bree-bar.table-container>

    </x-bree-bar.container>
</x-app-layout>

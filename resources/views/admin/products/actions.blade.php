<div class="flex justify-center gap-3">
    <x-bree-bar.edit-button href="{{ route('products.edit', $product->id) }}">
        editar</x-bree-bar.edit-button>{{-- <x-bree-bar.view-button href="#">Ver</x-bree-bar.view-button> --}}
    <x-bree-bar.delete-button :action="route('products.delete', $product->id)">Eliminar</x-bree-bar.delete-button>
</div>

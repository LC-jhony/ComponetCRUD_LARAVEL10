<div class="mt-4">
    <a
        {{ $attributes->merge([
            'class' => ' inline-flex items-center
                        rounded-lg bg-gray-200 px-8 py-2 gap-x-2
                            font-medium text-gray-700 outline-none
                            hover:opacity-80 focus:ring',
        ]) }}>
        {{ $slot }}
    </a>
</div>

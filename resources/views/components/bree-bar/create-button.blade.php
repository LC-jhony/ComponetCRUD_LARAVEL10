<div class="flex justify-end">
    <a href="{{ $href }}"
        {{ $attributes->merge(['type' => 'submit', 'class' => 'px-4 py-2 text-white bg-blue-800 rounded-md hover:bg-blue-700']) }}>

        <span>

        </span>
        <span class="hidden md:inline-block"> {{ $slot }}</span>
    </a>
</div>

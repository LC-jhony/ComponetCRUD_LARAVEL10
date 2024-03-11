@props(['action', 'buttonText' => __('Eliminar')])

<div x-data="{ initial: true, deleting: false }" class="flex items-center text-sm">
    <button x-on:click.prevent="deleting = true; initial = false" x-show="initial"
        x-on:deleting.window="$el.disabled = true" x-transition:enter="transition ease-out duration-150"
        x-transition:enter-start="opacity-0 transform scale-90" x-transition:enter-end="opacity-100 transform scale-100"
        class="px-3 py-1.5 gap-2 flex items-center text-rose-500 p-1 rounded bg-rose-200 hover:bg-rose-500 hover:text-white dark:bg-rose-500 dark:hover:bg-rose-600 disabled:opacity-50">
        <span>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
            </svg>
        </span>
        <span class="hidden md:inline-block">{{ $buttonText }}</span>

    </button>

    <div x-show="deleting" x-transition:enter="transition ease-out duration-150"
        x-transition:enter-start="opacity-0 transform scale-90" x-transition:enter-end="opacity-100 transform scale-100"
        x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 transform scale-100"
        x-transition:leave-end="opacity-0 transform scale-90" class="flex items-center space-x-3">
        <span class="dark:text-white">@lang('¿Esta seguro?')</span>

        <form x-on:submit="$dispatch('deleting')" method="post" action="{{ $action }}">
            @csrf
            @method('delete')

            <button x-on:click="$el.form.submit()" x-on:deleting.window="$el.disabled = true" type="submit"
                class="p-1 text-white rounded bg-rose-600 hover:bg-rose-700 dark:bg-rose-500 dark:hover:bg-rose-600 disabled:opacity-50">
                @lang('Yes')
            </button>

            <button x-on:click.prevent="deleting = false; setTimeout(() => { initial = true }, 150)"
                x-on:deleting.window="$el.disabled = true"
                class="p-1 text-white bg-gray-600 rounded hover:bg-gray-700 dark:bg-gray-500 dark:hover:bg-gray-600 disabled:opacity-50">
                @lang('No')
            </button>
        </form>
    </div>
</div>

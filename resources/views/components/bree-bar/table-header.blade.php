<!-- Header -->

<!-- Input -->
<div class="px-4 mb-4 md:flex md:justify-between md:p-0">
    <div class="w-full mb-4 space-y-4 md:mb-0 md:w-2/4 md:flex md:space-y-0 md:space-x-2">
        <div class="flex rounded-md shadow-sm">
            {{ $search }}
        </div>
        <div class="w-full mb-4 md:w-auto md:mb-0">
            <div class="relative z-10 inline-block w-full text-left md:w-auto">
                {{ $filter }}
            </div>
        </div>
    </div>
    <!-- End Input -->

    <div class="sm:col-span-2 md:grow">
        <div class="flex justify-end gap-x-2">
            {{ $action }}
        </div>
    </div>
</div>

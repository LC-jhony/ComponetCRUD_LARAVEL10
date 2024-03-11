<div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
    <table class="min-w-full divide-y divide-gray-200 dark:divide-none">
        <thead class="bg-gray-50">
            @foreach ($headers as $header)
                <th
                    class="px-6 py-3 text-left text-xs font-medium whitespace-nowrap text-gray-500 uppercase tracking-wider dark:bg-gray-900 dark:text-gray-400 {{ $header['classes'] }}">
                    {{ $header['name'] }}</th>
            @endforeach

        </thead>

        <tbody class="bg-white divide-y divide-gray-200">
            {{ $slot }}
        </tbody>
    </table>
</div>

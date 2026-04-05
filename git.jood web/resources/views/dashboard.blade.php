<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Existing Welcome Section -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-6">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>

            <!-- Products Section Link -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-6">
                <div class="p-6">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100 mb-4">Sections</h3>
                    <ul class="list-disc pl-5 text-gray-900 dark:text-gray-100">
                        <li><a href="{{ route('products.index') }}" class="text-blue-500 hover:underline">Products Section</a></li>
                        <li><a href="{{ route('categories.index') }}" class="text-blue-500 hover:underline">Categories Section</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

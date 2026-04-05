<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Category') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-lg font-semibold mb-4">Edit Category</h3>
                    <form method="POST" action="{{ route('categories.update', $category->id) }}">
                        @csrf
                        @method('PUT')
                        <div>
                            <label for="name" class="block text-sm font-medium">Category Name</label>
                            <input type="text" id="name" name="name" value="{{ $category->name }}" required class="block w-full mt-1 rounded-md">
                        </div>
                        <div>
                            <label for="description" class="block text-sm font-medium">Description</label>
                            <textarea id="description" name="description" class="block w-full mt-1 rounded-md">{{ $category->description }}</textarea>
                        </div>
                        <button type="submit" class="mt-4 px-4 py-2 bg-blue-500 text-white rounded-md">Update</button>
                        <a href="{{ route('categories.index') }}" class="mt-4 px-4 py-2 bg-gray-500 text-white rounded-md">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Products') }}
        </h2>
    </x-slot>

    <div class="flex justify-end">

        <a href="{{ route('products.create') }}" class="ml-4 px-4 py-2 bg-gray-500 text-white font-semibold rounded-md shadow hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-gray-500">
            create
        </a>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-lg font-semibold mb-4">Product List</h3>
                    <a href="{{ route('products.create') }}" class="px-4 py-2 bg-blue-500 text-white rounded-md mb-4 inline-block">+ Add New Product</a>
                    <table class="table-auto w-full">
                        <thead>
                            <tr>
                                <th class="px-4 py-2">#</th>
                                <th class="px-4 py-2">Name</th>
                                <th class="px-4 py-2">Price</th>
                                <th class="px-4 py-2">Category</th>
                                <th class="px-4 py-2">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <td class="border px-4 py-2">{{ $loop->iteration }}</td>
                                    <td class="border px-4 py-2">{{ $product->name }}</td>
                                    <td class="border px-4 py-2">${{ $product->price }}</td>
                                    <td class="border px-4 py-2">{{ $product->category->name ?? 'N/A' }}</td>
                                    <td class="border px-4 py-2">
                                        <a href="{{ route('products.edit', $product->id) }}" class="text-blue-500 hover:underline">Edit</a>
                                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-500 hover:underline">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

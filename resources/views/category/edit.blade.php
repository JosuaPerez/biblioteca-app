<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Category') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <h3 class="font-semibold pb-5">Edit a category: {{ $category->category_name }}</h3>

                    <form action="{{ route('category.update', $category->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        @if($errors->any)
                            @foreach($errors->all() as $error)
                                <p>{{ $error }}</p>
                            @endforeach
                        @endif

                        <div class="grid grid-cols-1 sm:grid-cols-6 gap-x-6">
                            <span class="sm:col-span-3">
                                <label class="block" for="category">Category</label>
                                <input
                                    class="block w-full"
                                    type="text"
                                    name="category"
                                    id="category"
                                    value="{{ old('category', $category->category_name) }}"
                                >
                            </span>
                        </div>

                        <div class="mt-6 flex items-center justify-end">
                            <a class="px-3" href="{{ route('category.index') }}">Cancel</a>

                            <button type="submit" class="bg-indigo-50 py-2 px-3 rounded">Save</button>
                        </div>
                    </form>

                    <form action="{{ route('category.destroy', $category->id) }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <button type="submit">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

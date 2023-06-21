<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Author') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <h3 class="font-semibold pb-5">Add a new category</h3>

                    <form action="{{ route('category.store') }}" method="POST">
                        @csrf

                        <div class="grid grid-cols-1 sm:grid-cols-6 gap-x-6">
                            <span class="sm:col-span-3">
                                <label class="block" for="category_name">Category</label>
                                <input
                                    class="block w-full"
                                    type="text"
                                    name="category_name"
                                    id="category_name"
                                    value="{{ old('category_name') }}"
                                >
                            </span>
                        </div>

                        <div class="mt-6 flex items-center justify-end">
                            <a class="px-3" href="{{ route('category.index') }}">Cancel</a>

                            <button type="submit" class="bg-indigo-50 py-2 px-3 rounded">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

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

                    <h3 class="font-semibold pb-5">Edit a author: {{ $author->author_name }}</h3>

                    <form action="{{ route('author.update', $author->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="grid grid-cols-1 sm:grid-cols-6 gap-x-6">
                            <span class="sm:col-span-3">
                                <label class="block" for="author_name">Author</label>
                                <input
                                    class="block w-full"
                                    type="text"
                                    name="author_name"
                                    id="author_name"
                                    value="{{ old('author_name', $author->author_name) }}"
                                >
                            </span>

                            <span class="sm:col-span-3">
                                <label class="block" for="book_name">Book Name</label>
                                <input
                                    class="block w-full"
                                    type="text"
                                    name="book_name"
                                    id="book_name"
                                    value="{{ old('book_name', $author->book_name) }}"
                                >
                            </span>

                            <span class="sm:col-span-3">
                                <label class="block" for="email">Email</label>
                                <input
                                    class="block w-full"
                                    type="email"
                                    name="email"
                                    id="email"
                                    value="{{ old('email', $author->email) }}"
                                >
                            </span>

                            <span class="sm:col-span-3">
                                <label class="block" for="phone">Phone</label>
                                <input
                                    class="block w-full"
                                    type="text"
                                    name="phone"
                                    id="phone"
                                    value="{{ old('phone', $author->phone) }}"
                                >
                            </span>
                        </div>

                        <div class="mt-6 flex items-center justify-end">
                            <a class="px-3" href="{{ route('author.index') }}">Cancel</a>

                            <button type="submit" class="bg-indigo-50 py-2 px-3 rounded">Save</button>
                        </div>
                    </form>

                    <form action="{{ route('author.destroy', $author->id) }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <button type="submit">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

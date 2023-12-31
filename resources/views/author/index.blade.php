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

                    <div class="flex items-center justify-end">
                        <a href="{{ route('author.create') }}" class="py-2 px-3">Add Author</a>
                    </div>

                    <table class="table-fixed border-separate border-spacing-6">
                        <thead>
                        <tr>
                            <th>Author</th>
                            <th>Book Name</th>
                            <th>Category</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($author as $authors)
                            <tr>
                                <td>{{ $authors->author_name }}</td>
                                <td>{{ $authors->book_name }}</td>
                                <td class="{{ ($authors->category?->deleted_at) ? 'italic' : 'not-italic' }}">{{ $authors->category?->category_name }}</td>
                                <td>{{ $authors->email }}</td>
                                <td>{{ $authors->phone }}</td>
                                <td>
                                    <a href="{{ route('author.edit', $authors->id) }}">
                                        <svg class="h-6 w-6" aria-hidden="true" fill="none" stroke="currentColor"
                                             stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10"
                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </a>
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

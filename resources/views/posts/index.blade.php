<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <a href="{{ route('posts.create') }}"
                       class="inline-block mb-4 bg-blue-600 hover:bg-blue-700 text-white font-bold px-6 py-2 rounded-md shadow-md transition">Create Post</a>
                    <div class="overflow-x-auto">
                        <table class="w-full min-w-[360px] border border-gray-200 rounded-lg shadow-md">
                            <thead>
                                <tr class="bg-gray-100 text-left border-b border-gray-300">
                                    <th class="py-3 px-4 font-semibold">Title</th>
                                    <th class="py-3 px-4 font-semibold">Category</th>
                                    <th class="py-3 px-4 font-semibold text-center">Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($posts as $post)
                                <tr class="odd:bg-white even:bg-gray-50 hover:bg-blue-50 transition">
                                    <td class="py-3 px-4 align-middle">{{ $post->title }}</td>
                                    <td class="py-3 px-4 align-middle">{{ $post->category->name }}</td>
                                    <td class="py-3 px-4 align-middle flex gap-4 justify-center">
                                        <a href="{{ route('posts.edit', $post->id) }}"
                                           class="text-blue-600 hover:text-blue-800 font-medium underline">Edit</a>
                                        <form method="POST" action="{{ route('posts.destroy', $post) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                    class="text-red-600 hover:text-red-800 font-medium underline"
                                                    onclick="return confirm('Are you sure you want to delete this post?')">
                                                Delete
                                            </button>
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
    </div>
</x-app-layout>
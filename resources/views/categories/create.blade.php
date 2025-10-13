<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Category Create') }} 
        </h2>
    </x-slot>
 
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('categories.store') }}"> 
                        @csrf
                        <div class="mb-4">
                            <label class="block text-sm font-bold mb-2 text-gray-700" for="Name">Name: </label>
                            <input class="w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:border-blue-500 shadow-sm" type="text" name="name" id="name" required>
                        </div>
                        <div class="flex justify-end">
                            <button class="bg-blue-600 hover:bg-blue-700 text-white font-bold px-6 py-2 rounded-md shadow transition" type="submit">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
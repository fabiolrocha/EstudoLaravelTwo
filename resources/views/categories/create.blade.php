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
                        <div>
                            <label class="block text-sm font-medium text-gray-700" for="Name">Name: </label>
                            <input class="border-2 border-gray-300 rounded-md p-2" type="text" name="name" id="name" required>
                        </div>
                        <div>
                            <button class="bg-blue-500 text-white px-4 py-2 rounded-md" type="submit">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
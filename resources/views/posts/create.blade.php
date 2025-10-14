<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Post Create') }} 
        </h2>
    </x-slot>
 
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('posts.store') }}"> 
                        @csrf
                        <div class="mb-4">
                            <label class="block text-sm font-bold mb-2 text-gray-700" for="Title">Title: </label>
                            <input class="w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:border-blue-500 shadow-sm" type="text" name="title" id="title" required>
                        </div>
                        <div class="mb-4">
                            <label class="block text-sm font-bold mb-2 text-gray-700" for="category_id">Category: </label>
                            <select class="w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:border-blue-500 shadow-sm" name="category_id" id="category_id" require>
                                @foreach ($categories as $category) 
                                <option class="w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:border-blue-500 shadow-sm" value="{{$category->id}}"> {{ $category->name }} </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-4">
                            <label class="block text-sm font-bold mb-2 text-gray-700" for="content">Content: </label>
                            <textarea class="w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:border-blue-500 shadow-sm" name="content" id="content" required></textarea>
                        </div>


                        <!-- Para adicionar imagem posteriormente
                        <div class="mb-4">
                            <label class="block text-sm font-bold mb-2 text-gray-700" for="image">Image: </label>
                            <input class="w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:border-blue-500 shadow-sm" type="file" name="image" id="image">
                        </div>
                        -->

                        
                        <div class="flex justify-end">
                            <button class="bg-blue-600 hover:bg-blue-700 text-white font-bold px-6 py-2 rounded-md shadow transition" type="submit">Create</button>
                        </div> 
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
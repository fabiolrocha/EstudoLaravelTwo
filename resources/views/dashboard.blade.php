<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Categories Section -->
            <div class="mb-8">
                <div class="bg-gradient-to-r from-blue-600 to-purple-600 rounded-xl shadow-lg overflow-hidden">
                    <div class="p-6">
                        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-6 gap-4">
                        <div class="bg-white/20 backdrop-blur-sm rounded-lg p-4 hover:bg-white/30 transition-all duration-300 transform hover:scale-105">
                                <a href="{{route('dashboard')}}" class="block text-center">
                                    <div class="text-white font-semibold text-sm">All</div>
                                </a>
                            </div>
                            @foreach ($categories as $category)
                            <div class="bg-white/20 backdrop-blur-sm rounded-lg p-4 hover:bg-white/30 transition-all duration-300 transform hover:scale-105">
                                <a href="{{route('dashboard', ['category_id' => $category->id])}}" class="block text-center">
                                    <div class="text-white font-semibold text-sm">{{ $category->name }}</div>
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <!-- Posts Section -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                <div class="p-6">
                    <div class="space-y-8">
                    @foreach ($posts as $post)
                    <article class="bg-gradient-to-r from-white to-gray-50 p-6 rounded-xl shadow-md hover:shadow-lg transition-all duration-300 border border-gray-100 hover:border-blue-200">
                        <div class="flex items-start justify-between mb-2">
                            <div class="flex-1">
                                <h2 class="text-2xl font-bold mb-2">
                                    <a href="{{ route('posts.show', $post->id) }}" class="text-gray-900 hover:text-blue-600 transition-colors duration-200">{{ $post->title }}</a>
                                </h2>
                                <div class="flex items-center text-sm text-gray-600 mb-3">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                    </svg>
                                    <span class="font-medium">{{ $post->user->name }}</span>
                                    <span class="mx-2">•</span>
                                    <span>{{ $post->created_at->format('d/m/Y') }}</span>
                                </div>
                            </div>
                            <div class="ml-4">
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                    {{ $post->category->name }}
                                </span>
                            </div>
                        </div>

                        <p class="text-gray-700 leading-relaxed mb-4">
                            {{ substr($post->content, 0, 150) }}...
                        </p>

                        <div class="flex items-center justify-between">
                            <a href="{{ route('posts.show', $post->id) }}" class="inline-flex items-center text-blue-600 hover:text-blue-800 font-medium transition-colors duration-200">
                                Read more
                                <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </article>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
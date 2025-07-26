<x-layout>
    <div class="min-h-screen py-8">

        <main class="container mx-auto px-4">
            {{-- Success/Error Messages (Optional, but good for feedback) --}}
            @if (session('success'))
                <div class="bg-green-500 text-white p-4 rounded-md mb-4 max-w-2xl mx-auto">
                    {{ session('success') }}
                </div>
            @endif
            @if (session('error'))
                <div class="bg-red-500 text-white p-4 rounded-md mb-4 max-w-2xl mx-auto">
                    {{ session('error') }}
                </div>
            @endif
            {{-- Informational messages from show() method for now --}}
            @if (session('info'))
                <div class="bg-blue-500 text-white p-4 rounded-md mb-4 max-w-2xl mx-auto">
                    {{ session('info') }}
                </div>
            @endif
            @if ($errors->any())
                <div class="bg-red-500 text-white p-4 rounded-md mb-4 max-w-2xl mx-auto">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @auth
                <section class="mb-8">
                    <div class="rounded-[20px] p-8 bg-[#310D84] max-w-2xl mx-auto"
                        style="box-shadow:-6px 3px 20px 4px #0000007d">
                        <h2 class="text-white text-2xl font-bold mb-4">Create New Post</h2>
                        <form action="{{ route('posts.store') }}" method="POST">
                            @csrf
                            {{-- Textarea for post title --}}
                            <textarea name="title"
                                class="bg-[#8777BA] w-full p-4 rounded-md placeholder:text-gray-300 shadow-md shadow-blue-950 resize-none mb-4 h-12 focus:ring-2 focus:ring-[#228CE0] focus:outline-none"
                                placeholder="Post Title (max 255 chars)">{{ old('title') }}</textarea>
                            @error('title')
                                <p class="text-red-500 text-xs mt-1 mb-4">{{ $message }}</p>
                            @enderror
                            {{-- Textarea for post content --}}
                            <textarea name="content"
                                class="bg-[#8777BA] w-full p-4 rounded-md placeholder:text-gray-300 shadow-md shadow-blue-950 resize-none mb-4 h-32 focus:ring-2 focus:ring-[#228CE0] focus:outline-none"
                                placeholder="What's on your mind, {{ auth()->user()->name }}? (max 500 chars)">{{ old('content') }}</textarea>
                            @error('content')
                                <p class="text-red-500 text-xs mt-1 mb-4">{{ $message }}</p>
                            @enderror
                            <div class="flex justify-end">
                                <button type="submit"
                                    class="h-12 px-8 cursor-pointer text-white rounded-md bg-gradient-to-br from-[#7336FF] to-[#3269FF] shadow-md shadow-blue-950 text-lg font-semibold hover:opacity-90 transition duration-300">
                                    Post
                                </button>
                            </div>
                        </form>
                    </div>
                </section>
            @endauth

            <section>
                <h2 class="text-white text-3xl font-bold mb-6 text-center">Recent Posts</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @forelse ($posts as $post)
                        <div class="rounded-[20px] p-6 bg-[#310D84]" style="box-shadow:-6px 3px 20px 4px #0000007d">
                            <div class="flex items-center mb-4">
                                <img src="{{ $post->user->profile_image ? asset('storage/' . $post->user->profile_image) : 'https://via.placeholder.com/40/8777BA/FFFFFF?text=' . substr($post->user->name, 0, 1) }}"
                                    alt="{{ $post->user->name }}'s Avatar"
                                    class="w-10 h-10 rounded-full mr-3 border-2 border-[#7337FF] object-cover">
                                <div>
                                    <p class="text-white font-semibold">{{ $post->user->name }}</p>
                                    <p class="text-gray-400 text-sm">{{ $post->created_at->diffForHumans() }}</p>
                                </div>
                            </div>
                            {{-- Display Post Title --}}
                            <h3 class="text-white text-xl font-bold mb-2">{{ $post->title }}</h3>
                            <p class="text-gray-200 mb-4">
                                {{ $post->content }}
                            </p>
                            <div class="flex justify-between items-center text-gray-400 text-sm">
                                <div class="flex space-x-4">
                                    <span
                                        class="flex items-center cursor-pointer hover:text-[#228CE0] transition duration-300">
                                        <svg class="w-5 h-5 mr-1" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        {{ $post->upvotes }} Likes
                                    </span>
                                    <span
                                        class="flex items-center cursor-pointer hover:text-[#228CE0] transition duration-300">
                                        <svg class="w-5 h-5 mr-1" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        0 Comments
                                    </span>
                                </div>
                                <a href="{{ route('posts.show', $post) }}"
                                    class="text-[#228CE0] cursor-pointer hover:underline">Read More</a>
                            </div>
                        </div>
                    @empty
                        <p class="col-span-full text-center text-gray-400 p-4">No posts found yet. Be the first to post!
                        </p>
                    @endforelse
                </div>
            </section>
        </main>
    </div>
</x-layout>
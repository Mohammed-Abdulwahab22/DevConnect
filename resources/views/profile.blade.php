<x-layout>
    <main class="container mx-auto max-w-4xl">
        <section
            class="rounded-[20px] p-8 bg-[#310D84] text-white flex flex-col md:flex-row items-center space-y-6 md:space-y-0 md:space-x-8 mb-8"
            style="box-shadow:-6px 3px 20px 4px #0000007d">
            <div class="flex-shrink-0">

                <img src="{{ auth()->user()->profile_image ? asset('storage/' . auth()->user()->profile_image) : 'https://via.placeholder.com/120/8777BA/FFFFFF?text=' . substr(auth()->user()->name, 0, 1) }}"
                    alt="{{ auth()->user()->name }}'s Avatar"
                    class="w-32 h-32 rounded-full border-4 border-[#7337FF] object-cover shadow-lg">
            </div>

            <div class="text-center md:text-left flex-grow">
                <h2 class="text-4xl font-bold mb-2">{{ auth()->user()->name }}</h2>
                @if (auth()->user()->occupation)
                    <p class="text-gray-300 text-lg mb-2">{{ auth()->user()->occupation }}</p>
                @else
                    <p class="text-gray-300 text-lg mb-2">No occupation specified</p>
                @endif
                {{-- <p class="text-gray-400 text-sm italic">"Building the future, one line of code at a time."</p> --}}
                <div class="flex flex-wrap justify-center md:justify-start space-x-4 mt-4 text-sm">
                    @if (auth()->user()->location)
                        <span class="flex items-center">
                            <svg class="w-4 h-4 mr-1 text-[#228CE0]" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            {{ auth()->user()->location }}
                        </span>
                    @endif
                    </span>
                    <span class="flex items-center">
                        <svg class="w-4 h-4 mr-1 text-[#228CE0]" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M2 10a8 8 0 018-8v8h8a8 8 0 01-8 8v-8H2z"></path>
                            <path
                                d="M12.293 11.293a1 1 0 00.001-1.415L10 7.586 7.707 9.879a1 1 0 001.414 1.414L10 10.414l.879.879a1 1 0 001.414 0z">
                            </path>
                        </svg>

                        {{ auth()->user()->email }} </span>
                </div>
            </div>
            <div class="flex flex-col space-y-3">
                <button onclick="window.location.href='/settings'"
                    class="h-10 px-6 cursor-pointer text-white rounded-md bg-gradient-to-br from-[#7336FF] to-[#3269FF] shadow-md shadow-blue-950 font-semibold text-sm">
                    Edit Profile
                </button>
                <button
                    onclick="document.getElementById('latest-posts-section').scrollIntoView({ behavior: 'smooth' });"
                    class="h-10 px-6 cursor-pointer text-white rounded-md bg-[#8777BA] shadow-md shadow-blue-950 font-semibold text-sm hover:bg-[#7a68a5] transition duration-300">
                    View Posts
                </button>
            </div>
        </section>

        ---

        <section class="grid grid-cols-1 sm:grid-cols-2 gap-8 mb-8">
            <div class="rounded-[20px] p-6 bg-[#310D84] text-white text-center"
                style="box-shadow:-6px 3px 20px 4px #0000007d">
                <p class="text-5xl font-bold text-[#228CE0]">{{ auth()->user()->posts->count() }}</p>
                <p class="text-gray-300 mt-2">Posts Created</p>
            </div>
            <div class="rounded-[20px] p-6 bg-[#310D84] text-white text-center"
                style="box-shadow:-6px 3px 20px 4px #0000007d">
                <p class="text-5xl font-bold text-[#7337FF]">{{ auth()->user()->posts->sum('upvotes') }}</p>
                <p class="text-gray-300 mt-2">Total Likes</p>
            </div>
        </section>

        ---

        <section class="rounded-[20px] p-8 bg-[#310D84] text-white mb-8" style="box-shadow:-6px 3px 20px 4px #0000007d">
            <h3 class="text-2xl font-bold mb-4 border-b border-gray-700 pb-2">About Me</h3>
            <p class="text-gray-400 text-sm italic">
                "{{ auth()->user()->about_me ? Str::limit(auth()->user()->about_me, 70) : 'No bio available.' }}"
            </p>
            <h3 class="text-2xl font-bold mt-6 mb-4 border-b border-gray-700 pb-2">Skills</h3>
            <div class="flex flex-wrap gap-3">
                <span
                    class="bg-[#8777BA] text-white px-4 py-1 rounded-full text-sm shadow-md shadow-blue-950">JavaScript</span>
                <span
                    class="bg-[#8777BA] text-white px-4 py-1 rounded-full text-sm shadow-md shadow-blue-950">React</span>
                <span
                    class="bg-[#8777BA] text-white px-4 py-1 rounded-full text-sm shadow-md shadow-blue-950">Node.js</span>
                <span
                    class="bg-[#8777BA] text-white px-4 py-1 rounded-full text-sm shadow-md shadow-blue-950">Python</span>
                <span
                    class="bg-[#8777BA] text-white px-4 py-1 rounded-full text-sm shadow-md shadow-blue-950">AWS</span>
                <span
                    class="bg-[#8777BA] text-white px-4 py-1 rounded-full text-sm shadow-md shadow-blue-950">Docker</span>
                <span
                    class="bg-[#8777BA] text-white px-4 py-1 rounded-full text-sm shadow-md shadow-blue-950">SQL</span>
            </div>
        </section>

        ---

        <section id="latest-posts-section">
            <h2 class="text-white text-3xl font-bold mb-6 text-center">My Latest Posts</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                {{-- Loop through the authenticated user's posts --}}
                @forelse (auth()->user()->posts as $post)
                    <div class="rounded-[20px] p-6 bg-[#310D84]" style="box-shadow:-6px 3px 20px 4px #0000007d">
                        <div class="flex items-center mb-4">
                            {{-- Use the logged-in user's avatar and name as the author for their own posts --}}
                            <img src="{{ auth()->user()->profile_image ? asset('storage/' . auth()->user()->profile_image) : 'https://via.placeholder.com/40/8777BA/FFFFFF?text=' . substr(auth()->user()->name, 0, 1) }}"
                                alt="{{ auth()->user()->name }}'s Avatar"
                                class="w-10 h-10 rounded-full mr-3 border-2 border-[#7337FF]">
                            <div>
                                <p class="text-white font-semibold">{{ auth()->user()->name }}</p>
                                {{-- Use Carbon's diffForHumans() for a readable time --}}
                                <p class="text-gray-400 text-sm">{{ $post->created_at->diffForHumans() }}</p>
                            </div>
                        </div>
                        <p class="text-gray-200 mb-4">
                            {{-- Display post content, limiting it for brevity on the profile page --}}
                            {{ Str::limit($post->content, 150) }}
                        </p>
                        <div class="flex justify-between items-center text-gray-400 text-sm">
                            <div class="flex space-x-4">
                                <span class="flex items-center">
                                    <svg class="w-5 h-5 mr-1" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    {{ $post->upvotes }} Likes
                                </span>
                                <span class="flex items-center">
                                    <svg class="w-5 h-5 mr-1" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    0 Comments {{-- Replace with dynamic count if you add a comments relationship --}}
                                </span>
                            </div>
                            {{-- Link to individual post (replace # with your actual route) --}}
                            <a href="#" class="text-[#228CE0] cursor-pointer hover:underline">Read More</a>
                        </div>
                    </div>
                @empty
                    <p class="col-span-full text-center text-gray-400 p-4">You haven't posted anything yet.</p>
                @endforelse
            </div>
        </section>
    </main>
</x-layout>

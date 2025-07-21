<x-layout>
     <div class="backdrop-brightness-50 min-h-screen py-8">
     

        <main class="container mx-auto px-4">
            <section class="mb-8">
                <div class="rounded-[20px] p-8 bg-[#310D84] max-w-2xl mx-auto"
                    style="box-shadow:-6px 3px 20px 4px #0000007d">
                    <h2 class="text-white text-2xl font-bold mb-4">Create New Post</h2>
                    <textarea
                        class="bg-[#8777BA] w-full p-4 rounded-md placeholder:text-gray-300 shadow-md shadow-blue-950 resize-none mb-4 h-32"
                        placeholder="What's on your mind, TyBot user?"></textarea>
                    <div class="flex justify-end">
                        <button
                            class="h-12 px-8 cursor-pointer text-white rounded-md bg-gradient-to-br from-[#7336FF] to-[#3269FF] shadow-md shadow-blue-950 text-lg font-semibold">
                            Post
                        </button>
                    </div>
                </div>
            </section>

            <section>
                <h2 class="text-white text-3xl font-bold mb-6 text-center">Recent Posts</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="rounded-[20px] p-6 bg-[#310D84]" style="box-shadow:-6px 3px 20px 4px #0000007d">
                        <div class="flex items-center mb-4">
                            <img src="https://via.placeholder.com/40/8777BA/FFFFFF?text=U1" alt="User Avatar"
                                class="w-10 h-10 rounded-full mr-3 border-2 border-[#7337FF]">
                            <div>
                                <p class="text-white font-semibold">John Doe</p>
                                <p class="text-gray-400 text-sm">2 hours ago</p>
                            </div>
                        </div>
                        <p class="text-gray-200 mb-4">
                            Just had a fantastic session coding with TyBot! The new features are incredibly intuitive.
                            Highly recommend it! #TyBot #CodingLife
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
                                    12 Likes
                                </span>
                                <span
                                    class="flex items-center cursor-pointer hover:text-[#228CE0] transition duration-300">
                                    <svg class="w-5 h-5 mr-1" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    3 Comments
                                </span>
                            </div>
                            <span class="text-[#228CE0] cursor-pointer hover:underline">Read More</span>
                        </div>
                    </div>

                    <div class="rounded-[20px] p-6 bg-[#310D84]" style="box-shadow:-6px 3px 20px 4px #0000007d">
                        <div class="flex items-center mb-4">
                            <img src="https://via.placeholder.com/40/8777BA/FFFFFF?text=U2" alt="User Avatar"
                                class="w-10 h-10 rounded-full mr-3 border-2 border-[#7337FF]">
                            <div>
                                <p class="text-white font-semibold">Jane Smith</p>
                                <p class="text-gray-400 text-sm">5 hours ago</p>
                            </div>
                        </div>
                        <p class="text-gray-200 mb-4">
                            Exploring new horizons with the help of TyBot's advanced analytics. Truly a game-changer for
                            data insights! #AI #DataScience
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
                                    25 Likes
                                </span>
                                <span
                                    class="flex items-center cursor-pointer hover:text-[#228CE0] transition duration-300">
                                    <svg class="w-5 h-5 mr-1" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    8 Comments
                                </span>
                            </div>
                            <span class="text-[#228CE0] cursor-pointer hover:underline">Read More</span>
                        </div>
                    </div>

                    <div class="rounded-[20px] p-6 bg-[#310D84]" style="box-shadow:-6px 3px 20px 4px #0000007d">
                        <div class="flex items-center mb-4">
                            <img src="https://via.placeholder.com/40/8777BA/FFFFFF?text=U3" alt="User Avatar"
                                class="w-10 h-10 rounded-full mr-3 border-2 border-[#7337FF]">
                            <div>
                                <p class="text-white font-semibold">AI Enthusiast</p>
                                <p class="text-gray-400 text-sm">1 day ago</p>
                            </div>
                        </div>
                        <p class="text-gray-200 mb-4">
                            TyBot's customer support is top-notch! Had a question about an integration, and they were
                            incredibly helpful and fast.
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
                                    30 Likes
                                </span>
                                <span
                                    class="flex items-center cursor-pointer hover:text-[#228CE0] transition duration-300">
                                    <svg class="w-5 h-5 mr-1" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    5 Comments
                                </span>
                            </div>
                            <span class="text-[#228CE0] cursor-pointer hover:underline">Read More</span>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>
</x-layout>
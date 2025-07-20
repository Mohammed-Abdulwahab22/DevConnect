<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile - DevConnect</title>
    <link rel="preload" as="image"
        href="https://res.cloudinary.com/dkt1t22qc/image/upload/v1742348949/Prestataires_Documents/smj7n1bdlpjsfsotwpco.png" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style>
        /* Custom scrollbar for better aesthetics */
        body::-webkit-scrollbar {
            width: 12px;
        }
        body::-webkit-scrollbar-track {
            background: #000000;
        }
        body::-webkit-scrollbar-thumb {
            background-color: #7337FF;
            border-radius: 20px;
            border: 3px solid #000000;
        }
    </style>
</head>
<body class="bg-cover bg-gradient-to-br from-[#7337FF] via-[#000000] to-[#0C7EA8] min-h-screen"
    style="background-image:url(https://res.cloudinary.com/dkt1t22qc/image/upload/v1742348950/Prestataires_Documents/fopt5esl9cgvlcawz1z4.jpg)">

    <div class="backdrop-brightness-50 min-h-screen py-8 px-4 sm:px-6 lg:px-8">
        <header class="flex flex-col sm:flex-row justify-between items-center px-4 py-4 mb-8">
            <div class="flex items-center space-x-4 mb-4 sm:mb-0">
                <div class="flex items-center space-x-3 cursor-pointer">
                    <div class="relative w-12 h-12">
                        <div class="absolute w-8 h-8 rounded-lg transform rotate-45 bg-gradient-to-br from-[#7336FF] to-[#3269FF]"
                            style="box-shadow:-4px 2px 10px 2px rgba(0, 0, 0, 0.6);"></div>
                        <div class="absolute w-8 h-8 rounded-lg transform -rotate-30 top-3 left-3 bg-[#310D84] border-2 border-[#7337FF]"
                            style="box-shadow:-4px 2px 10px 2px rgba(0, 0, 0, 0.6);"></div>
                    </div>
                    <span class="text-4xl font-extrabold text-white">DevConnect</span>
                </div>
            </div>
            <nav>
                <ul class="flex flex-wrap justify-center space-x-4 sm:space-x-6 text-white text-lg">
                    <li><a href="#" class="hover:text-[#228CE0] transition duration-300">Home</a></li>
                    <li><a href="#" class="font-bold text-[#228CE0] hover:text-[#228CE0] transition duration-300">Profile</a></li>
                    <li><a href="#" class="hover:text-[#228CE0] transition duration-300">Settings</a></li>
                    <li><a href="#" class="hover:text-[#228CE0] transition duration-300">Logout</a></li>
                </ul>
            </nav>
        </header>

        ---

        <main class="container mx-auto max-w-4xl">
            <section class="rounded-[20px] p-8 bg-[#310D84] text-white flex flex-col md:flex-row items-center space-y-6 md:space-y-0 md:space-x-8 mb-8"
                style="box-shadow:-6px 3px 20px 4px #0000007d">
                <div class="flex-shrink-0">
                    <img src="https://via.placeholder.com/120/8777BA/FFFFFF?text=JD" alt="User Avatar"
                        class="w-32 h-32 rounded-full border-4 border-[#7337FF] object-cover shadow-lg">
                </div>
                <div class="text-center md:text-left flex-grow">
                    <h2 class="text-4xl font-bold mb-2">John Doe</h2>
                    <p class="text-gray-300 text-lg mb-2">Full-stack Developer @ DevConnect HQ</p>
                    <p class="text-gray-400 text-sm italic">"Building the future, one line of code at a time."</p>
                    <div class="flex flex-wrap justify-center md:justify-start space-x-4 mt-4 text-sm">
                        <span class="flex items-center">
                            <svg class="w-4 h-4 mr-1 text-[#228CE0]" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path></svg>
                            London, UK
                        </span>
                        <span class="flex items-center">
                            <svg class="w-4 h-4 mr-1 text-[#228CE0]" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 01-8 8v-8H2z"></path><path d="M12.293 11.293a1 1 0 00.001-1.415L10 7.586 7.707 9.879a1 1 0 001.414 1.414L10 10.414l.879.879a1 1 0 001.414 0z"></path></svg>
                            john.doe@devconnect.com
                        </span>
                    </div>
                </div>
                <div class="flex flex-col space-y-3">
                    <button class="h-10 px-6 cursor-pointer text-white rounded-md bg-gradient-to-br from-[#7336FF] to-[#3269FF] shadow-md shadow-blue-950 font-semibold text-sm">
                        Edit Profile
                    </button>
                    <button class="h-10 px-6 cursor-pointer text-white rounded-md bg-[#8777BA] shadow-md shadow-blue-950 font-semibold text-sm hover:bg-[#7a68a5] transition duration-300">
                        View Posts
                    </button>
                </div>
            </section>

            ---

            <section class="grid grid-cols-1 sm:grid-cols-3 gap-8 mb-8">
                <div class="rounded-[20px] p-6 bg-[#310D84] text-white text-center" style="box-shadow:-6px 3px 20px 4px #0000007d">
                    <p class="text-5xl font-bold text-[#228CE0]">150</p>
                    <p class="text-gray-300 mt-2">Posts Created</p>
                </div>
                <div class="rounded-[20px] p-6 bg-[#310D84] text-white text-center" style="box-shadow:-6px 3px 20px 4px #0000007d">
                    <p class="text-5xl font-bold text-[#7337FF]">8K</p>
                    <p class="text-gray-300 mt-2">Total Likes</p>
                </div>
                <div class="rounded-[20px] p-6 bg-[#310D84] text-white text-center" style="box-shadow:-6px 3px 20px 4px #0000007d">
                    <p class="text-5xl font-bold text-[#0C7EA8]">23</p>
                    <p class="text-gray-300 mt-2">Projects Contributed</p>
                </div>
            </section>

            ---

            <section class="rounded-[20px] p-8 bg-[#310D84] text-white mb-8" style="box-shadow:-6px 3px 20px 4px #0000007d">
                <h3 class="text-2xl font-bold mb-4 border-b border-gray-700 pb-2">About Me</h3>
                <p class="text-gray-300 leading-relaxed">
                    Passionate full-stack developer with over 7 years of experience in building scalable web applications.
                    Specializing in modern JavaScript frameworks, backend APIs, and cloud infrastructure.
                    Always eager to learn new technologies and contribute to open-source projects.
                    Outside of coding, I enjoy exploring new hiking trails and playing chess.
                </p>
                <h3 class="text-2xl font-bold mt-6 mb-4 border-b border-gray-700 pb-2">Skills</h3>
                <div class="flex flex-wrap gap-3">
                    <span class="bg-[#8777BA] text-white px-4 py-1 rounded-full text-sm shadow-md shadow-blue-950">JavaScript</span>
                    <span class="bg-[#8777BA] text-white px-4 py-1 rounded-full text-sm shadow-md shadow-blue-950">React</span>
                    <span class="bg-[#8777BA] text-white px-4 py-1 rounded-full text-sm shadow-md shadow-blue-950">Node.js</span>
                    <span class="bg-[#8777BA] text-white px-4 py-1 rounded-full text-sm shadow-md shadow-blue-950">Python</span>
                    <span class="bg-[#8777BA] text-white px-4 py-1 rounded-full text-sm shadow-md shadow-blue-950">AWS</span>
                    <span class="bg-[#8777BA] text-white px-4 py-1 rounded-full text-sm shadow-md shadow-blue-950">Docker</span>
                    <span class="bg-[#8777BA] text-white px-4 py-1 rounded-full text-sm shadow-md shadow-blue-950">SQL</span>
                </div>
            </section>

            ---

            <section>
                <h2 class="text-white text-3xl font-bold mb-6 text-center">My Latest Posts</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="rounded-[20px] p-6 bg-[#310D84]" style="box-shadow:-6px 3px 20px 4px #0000007d">
                        <div class="flex items-center mb-4">
                            <img src="https://via.placeholder.com/40/8777BA/FFFFFF?text=JD" alt="User Avatar"
                                class="w-10 h-10 rounded-full mr-3 border-2 border-[#7337FF]">
                            <div>
                                <p class="text-white font-semibold">John Doe</p>
                                <p class="text-gray-400 text-sm">3 hours ago</p>
                            </div>
                        </div>
                        <p class="text-gray-200 mb-4">
                            Just deployed a new feature on DevConnect! The performance boost is real. Excited to see how users react. #FrontendDev #DevConnect
                        </p>
                        <div class="flex justify-between items-center text-gray-400 text-sm">
                            <div class="flex space-x-4">
                                <span class="flex items-center cursor-pointer hover:text-[#228CE0] transition duration-300">
                                    <svg class="w-5 h-5 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd"></path></svg>
                                    45 Likes
                                </span>
                                <span class="flex items-center cursor-pointer hover:text-[#228CE0] transition duration-300">
                                    <svg class="w-5 h-5 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z" clip-rule="evenodd"></path></svg>
                                    9 Comments
                                </span>
                            </div>
                            <span class="text-[#228CE0] cursor-pointer hover:underline">Read More</span>
                        </div>
                    </div>

                    <div class="rounded-[20px] p-6 bg-[#310D84]" style="box-shadow:-6px 3px 20px 4px #0000007d">
                        <div class="flex items-center mb-4">
                            <img src="https://via.placeholder.com/40/8777BA/FFFFFF?text=JD" alt="User Avatar"
                                class="w-10 h-10 rounded-full mr-3 border-2 border-[#7337FF]">
                            <div>
                                <p class="text-white font-semibold">John Doe</p>
                                <p class="text-gray-400 text-sm">1 day ago</p>
                            </div>
                        </div>
                        <p class="text-gray-200 mb-4">
                            Attended an amazing virtual conference on AI ethics today. So much to learn and apply to our work. #AI #Ethics #FutureTech
                        </p>
                        <div class="flex justify-between items-center text-gray-400 text-sm">
                            <div class="flex space-x-4">
                                <span class="flex items-center cursor-pointer hover:text-[#228CE0] transition duration-300">
                                    <svg class="w-5 h-5 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd"></path></svg>
                                    68 Likes
                                </span>
                                <span class="flex items-center cursor-pointer hover:text-[#228CE0] transition duration-300">
                                    <svg class="w-5 h-5 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z" clip-rule="evenodd"></path></svg>
                                    15 Comments
                                </span>
                            </div>
                            <span class="text-[#228CE0] cursor-pointer hover:underline">Read More</span>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>
</body>
</html>
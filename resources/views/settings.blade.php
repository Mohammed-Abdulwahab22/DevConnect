<x-layout>

    <body class="bg-cover bg-gradient-to-br from-[#7337FF] via-[#000000] to-[#0C7EA8] min-h-screen"
        style="background-image:url(https://res.cloudinary.com/dkt1t22qc/image/upload/v1742348950/Prestataires_Documents/fopt5esl9cgvlcawz1z4.jpg)">

        <div class="min-h-screen py-8 px-4 sm:px-6 lg:px-8">
            <main class="container mx-auto max-w-3xl space-y-8">
                <h1 class="text-white text-4xl font-bold mb-6 text-center">Account Settings</h1>

                <!-- General Settings Section -->
                <section class="rounded-[20px] p-8 bg-[#310D84] text-white"
                    style="box-shadow:-6px 3px 20px 4px #0000007d">
                    <h2 class="text-2xl font-bold mb-6 border-b border-gray-700 pb-3">General Information</h2>
                    <div class="space-y-6">
                        <div>
                            <label for="fullName" class="block text-gray-300 text-sm font-semibold mb-2">Full
                                Name</label>
                            <input type="text" id="fullName" value="John Doe"
                                class="bg-[#8777BA] w-full p-2.5 rounded-md placeholder:text-gray-300 shadow-md shadow-blue-950 focus:ring-2 focus:ring-[#228CE0] focus:outline-none" />
                        </div>
                        <div>
                            <label for="email" class="block text-gray-300 text-sm font-semibold mb-2">Email
                                Address</label>
                            <input type="email" id="email" value="john.doe@devconnect.com"
                                class="bg-[#8777BA] w-full p-2.5 rounded-md placeholder:text-gray-300 shadow-md shadow-blue-950 focus:ring-2 focus:ring-[#228CE0] focus:outline-none" />
                        </div>
                        <div>
                            <label for="bio" class="block text-gray-300 text-sm font-semibold mb-2">Bio</label>
                            <textarea id="bio" rows="4"
                                class="bg-[#8777BA] w-full p-2.5 rounded-md placeholder:text-gray-300 shadow-md shadow-blue-950 focus:ring-2 focus:ring-[#228CE0] focus:outline-none resize-y">Building the future, one line of code at a time.</textarea>
                        </div>
                        <div class="flex justify-end">
                            <button
                                class="h-10 px-8 cursor-pointer text-white rounded-md bg-gradient-to-br from-[#7336FF] to-[#3269FF] shadow-md shadow-blue-950 font-semibold text-base hover:opacity-90 transition duration-300">
                                Save Changes
                            </button>
                        </div>
                    </div>
                </section>

                <!-- Notification Settings Section -->
                <section class="rounded-[20px] p-8 bg-[#310D84] text-white"
                    style="box-shadow:-6px 3px 20px 4px #0000007d">
                    <h2 class="text-2xl font-bold mb-6 border-b border-gray-700 pb-3">Notification Preferences</h2>
                    <div class="space-y-4">
                        <div class="flex items-center justify-between">
                            <span class="text-gray-300">Email Notifications</span>
                            <label class="toggle-switch">
                                <input type="checkbox" checked>
                                <span class="slider"></span>
                            </label>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-gray-300">Push Notifications</span>
                            <label class="toggle-switch">
                                <input type="checkbox">
                                <span class="slider"></span>
                            </label>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-gray-300">New Post Alerts</span>
                            <label class="toggle-switch">
                                <input type="checkbox" checked>
                                <span class="slider"></span>
                            </label>
                        </div>
                    </div>
                </section>

                <!-- Security Settings Section -->
                <section class="rounded-[20px] p-8 bg-[#310D84] text-white"
                    style="box-shadow:-6px 3px 20px 4px #0000007d">
                    <h2 class="text-2xl font-bold mb-6 border-b border-gray-700 pb-3">Security</h2>
                    <div class="space-y-6">
                        <div>
                            <label for="currentPassword" class="block text-gray-300 text-sm font-semibold mb-2">Current
                                Password</label>
                            <input type="password" id="currentPassword"
                                class="bg-[#8777BA] w-full p-2.5 rounded-md placeholder:text-gray-300 shadow-md shadow-blue-950 focus:ring-2 focus:ring-[#228CE0] focus:outline-none" />
                        </div>
                        <div>
                            <label for="newPassword" class="block text-gray-300 text-sm font-semibold mb-2">New
                                Password</label>
                            <input type="password" id="newPassword"
                                class="bg-[#8777BA] w-full p-2.5 rounded-md placeholder:text-gray-300 shadow-md shadow-blue-950 focus:ring-2 focus:ring-[#228CE0] focus:outline-none" />
                        </div>
                        <div>
                            <label for="confirmNewPassword"
                                class="block text-gray-300 text-sm font-semibold mb-2">Confirm New Password</label>
                            <input type="password" id="confirmNewPassword"
                                class="bg-[#8777BA] w-full p-2.5 rounded-md placeholder:text-gray-300 shadow-md shadow-blue-950 focus:ring-2 focus:ring-[#228CE0] focus:outline-none" />
                        </div>
                        <div class="flex justify-end">
                            <button
                                class="h-10 px-8 cursor-pointer text-white rounded-md bg-gradient-to-br from-[#7336FF] to-[#3269FF] shadow-md shadow-blue-950 font-semibold text-base hover:opacity-90 transition duration-300">
                                Change Password
                            </button>
                        </div>
                        <div class="mt-8 pt-6 border-t border-gray-700">
                            <h3 class="text-xl font-bold mb-4">Danger Zone</h3>
                            <button
                                class="h-10 px-6 cursor-pointer text-white rounded-md bg-red-600 shadow-md shadow-red-950 font-semibold text-base hover:bg-red-700 transition duration-300">
                                Delete Account
                            </button>
                            <p class="text-gray-400 text-sm mt-2">This action is irreversible.</p>
                        </div>
                    </div>
                </section>
            </main>
        </div>
    </body>
</x-layout>

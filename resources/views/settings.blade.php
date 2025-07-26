<x-layout>

    <body class="bg-cover bg-gradient-to-br from-[#7337FF] via-[#000000] to-[#0C7EA8] min-h-screen"
        style="background-image:url(https://res.cloudinary.com/dkt1t22qc/image/upload/v1742348950/Prestataires_Documents/fopt5esl9cgvlcawz1z4.jpg)">

        <div class="min-h-screen py-8 px-4 sm:px-6 lg:px-8">
            <main class="container mx-auto max-w-3xl space-y-8">
                <h1 class="text-white text-4xl font-bold mb-6 text-center">Account Settings</h1>

                <section class="rounded-[20px] p-8 bg-[#310D84] text-white flex flex-col items-center"
                    style="box-shadow:-6px 3px 20px 4px #0000007d">
                    <h2 class="text-2xl font-bold mb-6 border-b border-gray-700 pb-3 w-full text-left">Profile Picture
                    </h2>
                    <form action="/profile-settings/profile-image" method="POST" enctype="multipart/form-data"
                        class="w-full flex flex-col items-center">
                        @csrf
                        @method('PUT') {{-- Or PATCH --}}
                        <div class="mb-4">
                            <img src="{{ auth()->user()->profile_image ? asset('storage/' . auth()->user()->profile_image) : 'https://via.placeholder.com/120/8777BA/FFFFFF?text=' . substr(auth()->user()->name, 0, 1) }}"
                                alt="{{ auth()->user()->name }}'s Avatar"
                                class="w-32 h-32 rounded-full border-4 border-[#7337FF] object-cover shadow-lg">
                        </div>
                        <label for="profile_image" class="block text-gray-300 text-sm font-semibold mb-2">Upload New
                            Image</label>
                        <input type="file" id="profile_image" name="profile_image"
                            class="bg-[#8777BA] w-full p-2.5 rounded-md placeholder:text-gray-300 shadow-md shadow-blue-950 focus:ring-2 focus:ring-[#228CE0] focus:outline-none file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-[#7336FF] file:text-white hover:file:bg-[#3269FF] cursor-pointer" />
                        @error('profile_image')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                        <div class="flex justify-end w-full mt-4">
                            <button type="submit"
                                class="h-10 px-8 cursor-pointer text-white rounded-md bg-gradient-to-br from-[#7336FF] to-[#3269FF] shadow-md shadow-blue-950 font-semibold text-base hover:opacity-90 transition duration-300">
                                Update Image
                            </button>
                        </div>
                    </form>
                </section>

                <section class="rounded-[20px] p-8 bg-[#310D84] text-white"
                    style="box-shadow:-6px 3px 20px 4px #0000007d">
                    <h2 class="text-2xl font-bold mb-6 border-b border-gray-700 pb-3">General Information</h2>
                    <form action="/profile-settings" method="POST" class="space-y-6">
                        @csrf
                        @method('PUT') {{-- Use PUT or PATCH for update operations --}}
                        <div>
                            <label for="name" class="block text-gray-300 text-sm font-semibold mb-2">Full
                                Name</label>
                            <input type="text" id="name" name="name" value="{{ old('name', auth()->user()->name) }}"
                                class="bg-[#8777BA] w-full p-2.5 rounded-md placeholder:text-gray-300 shadow-md shadow-blue-950 focus:ring-2 focus:ring-[#228CE0] focus:outline-none" />
                            @error('name')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="email" class="block text-gray-300 text-sm font-semibold mb-2">Email
                                Address</label>
                            <input type="email" id="email" name="email"
                                value="{{ old('email', auth()->user()->email) }}"
                                class="bg-[#8777BA] w-full p-2.5 rounded-md placeholder:text-gray-300 shadow-md shadow-blue-950 focus:ring-2 focus:ring-[#228CE0] focus:outline-none" />
                            @error('email')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="occupation"
                                class="block text-gray-300 text-sm font-semibold mb-2">Occupation</label>
                            <input type="text" id="occupation" name="occupation"
                                value="{{ old('occupation', auth()->user()->occupation) }}"
                                class="bg-[#8777BA] w-full p-2.5 rounded-md placeholder:text-gray-300 shadow-md shadow-blue-950 focus:ring-2 focus:ring-[#228CE0] focus:outline-none" />
                            @error('occupation')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="location"
                                class="block text-gray-300 text-sm font-semibold mb-2">Location</label>
                            <input type="text" id="location" name="location"
                                value="{{ old('location', auth()->user()->location) }}"
                                class="bg-[#8777BA] w-full p-2.5 rounded-md placeholder:text-gray-300 shadow-md shadow-blue-950 focus:ring-2 focus:ring-[#228CE0] focus:outline-none" />
                            @error('location')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="about_me" class="block text-gray-300 text-sm font-semibold mb-2">About
                                Me</label>
                            <textarea id="about_me" name="about_me" rows="4"
                                class="bg-[#8777BA] w-full p-2.5 rounded-md placeholder:text-gray-300 shadow-md shadow-blue-950 focus:ring-2 focus:ring-[#228CE0] focus:outline-none resize-y">{{ old('about_me', auth()->user()->about_me) }}</textarea>
                            @error('about_me')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="skills" class="block text-gray-300 text-sm font-semibold mb-2">Skills
                                (comma-separated)</label>
                            <input type="text" id="skills" name="skills"
                                value="{{ old('skills', is_array(auth()->user()->skills) ? implode(', ', auth()->user()->skills) : auth()->user()->skills) }}"
                                class="bg-[#8777BA] w-full p-2.5 rounded-md placeholder:text-gray-300 shadow-md shadow-blue-950 focus:ring-2 focus:ring-[#228CE0] focus:outline-none" />
                            @error('skills')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="flex justify-end">
                            <button type="submit"
                                class="h-10 px-8 cursor-pointer text-white rounded-md bg-gradient-to-br from-[#7336FF] to-[#3269FF] shadow-md shadow-blue-950 font-semibold text-base hover:opacity-90 transition duration-300">
                                Save Changes
                            </button>
                        </div>
                    </form>
                </section>

                {{-- <section class="rounded-[20px] p-8 bg-[#310D84] text-white"
                    style="box-shadow:-6px 3px 20px 4px #0000007d">
                    <h2 class="text-2xl font-bold mb-6 border-b border-gray-700 pb-3">Notification Preferences</h2>
                    <form action="/profile-settings/notifications" method="POST" class="space-y-4">
                        @csrf
                        @method('PUT')
                        <div class="flex items-center justify-between">
                            <span class="text-gray-300">Email Notifications</span>
                            <label class="toggle-switch">
                                <input type="checkbox" name="email_notifications"
                                    {{ auth()->user()->email_notifications ? 'checked' : '' }}>
                                <span class="slider"></span>
                            </label>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-gray-300">Push Notifications</span>
                            <label class="toggle-switch">
                                <input type="checkbox" name="push_notifications"
                                    {{ auth()->user()->push_notifications ? 'checked' : '' }}>
                                <span class="slider"></span>
                            </label>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-gray-300">New Post Alerts</span>
                            <label class="toggle-switch">
                                <input type="checkbox" name="new_post_alerts"
                                    {{ auth()->user()->new_post_alerts ? 'checked' : '' }}>
                                <span class="slider"></span>
                            </label>
                        </div>
                        <div class="flex justify-end w-full mt-4">
                            <button type="submit"
                                class="h-10 px-8 cursor-pointer text-white rounded-md bg-gradient-to-br from-[#7336FF] to-[#3269FF] shadow-md shadow-blue-950 font-semibold text-base hover:opacity-90 transition duration-300">
                                Save Notifications
                            </button>
                        </div>
                    </form>
                </section> --}}

                <section class="rounded-[20px] p-8 bg-[#310D84] text-white"
                    style="box-shadow:-6px 3px 20px 4px #0000007d">
                    <h2 class="text-2xl font-bold mb-6 border-b border-gray-700 pb-3">Security</h2>
                    <form action="/profile-settings/password" method="POST" class="space-y-6">
                        @csrf
                        @method('PUT')
                        <div>
                            <label for="current_password" class="block text-gray-300 text-sm font-semibold mb-2">Current
                                Password</label>
                            <input type="password" id="current_password" name="current_password"
                                class="bg-[#8777BA] w-full p-2.5 rounded-md placeholder:text-gray-300 shadow-md shadow-blue-950 focus:ring-2 focus:ring-[#228CE0] focus:outline-none" />
                            @error('current_password')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="password" class="block text-gray-300 text-sm font-semibold mb-2">New
                                Password</label>
                            <input type="password" id="password" name="password"
                                class="bg-[#8777BA] w-full p-2.5 rounded-md placeholder:text-gray-300 shadow-md shadow-blue-950 focus:ring-2 focus:ring-[#228CE0] focus:outline-none" />
                            @error('password')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="password_confirmation"
                                class="block text-gray-300 text-sm font-semibold mb-2">Confirm New Password</label>
                            <input type="password" id="password_confirmation" name="password_confirmation"
                                class="bg-[#8777BA] w-full p-2.5 rounded-md placeholder:text-gray-300 shadow-md shadow-blue-950 focus:ring-2 focus:ring-[#228CE0] focus:outline-none" />
                            @error('password_confirmation')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="flex justify-end">
                            <button type="submit"
                                class="h-10 px-8 cursor-pointer text-white rounded-md bg-gradient-to-br from-[#7336FF] to-[#3269FF] shadow-md shadow-blue-950 font-semibold text-base hover:opacity-90 transition duration-300">
                                Change Password
                            </button>
                        </div>
                    </form>
                    <div class="mt-8 pt-6 border-t border-gray-700">
                        <h3 class="text-xl font-bold mb-4">Danger Zone</h3>
                        <form action="/profile-settings/delete-account" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                onclick="return confirm('Are you sure you want to delete your account? This action cannot be undone.')"
                                class="h-10 px-6 cursor-pointer text-white rounded-md bg-red-600 shadow-md shadow-red-950 font-semibold text-base hover:bg-red-700 transition duration-300">
                                Delete Account
                            </button>
                        </form>
                        <p class="text-gray-400 text-sm mt-2">This action is irreversible.</p>
                    </div>
                </section>
            </main>
        </div>
        <style>
            /* The switch - the box around the slider */
            .toggle-switch {
                position: relative;
                display: inline-block;
                width: 60px;
                height: 34px;
            }

            /* Hide default HTML checkbox */
            .toggle-switch input {
                opacity: 0;
                width: 0;
                height: 0;
            }

            /* The slider */
            .slider {
                position: absolute;
                cursor: pointer;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background-color: #ccc;
                -webkit-transition: .4s;
                transition: .4s;
                border-radius: 34px;
            }

            .slider:before {
                position: absolute;
                content: "";
                height: 26px;
                width: 26px;
                left: 4px;
                bottom: 4px;
                background-color: white;
                -webkit-transition: .4s;
                transition: .4s;
                border-radius: 50%;
            }

            input:checked+.slider {
                background-color: #2196F3;
            }

            input:focus+.slider {
                box-shadow: 0 0 1px #2196F3;
            }

            input:checked+.slider:before {
                -webkit-transform: translateX(26px);
                -ms-transform: translateX(26px);
                transform: translateX(26px);
            }
        </style>
    </body>
</x-layout>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - DevConnect</title>
    <link rel="preload" as="image" href="https://res.cloudinary.com/dkt1t22qc/image/upload/v1742348949/Prestataires_Documents/smj7n1bdlpjsfsotwpco.png" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-cover bg-gradient-to-br from-[#7337FF] via-[#000000] to-[#0C7EA8]"
    style="background-image:url(https://res.cloudinary.com/dkt1t22qc/image/upload/v1742348950/Prestataires_Documents/fopt5esl9cgvlcawz1z4.jpg)">
    <div class="h-screen flex justify-center items-center backdrop-brightness-50">
        <div class="flex flex-col items-center space-y-8">

            <div class="flex items-center space-x-3 mb-8">
                <div class="relative w-12 h-12">
                    <div class="absolute w-8 h-8 rounded-lg transform rotate-45 bg-gradient-to-br from-[#7336FF] to-[#3269FF]"
                        style="box-shadow:-4px 2px 10px 2px rgba(0, 0, 0, 0.6);"></div>
                    <div class="absolute w-8 h-8 rounded-lg transform -rotate-30 top-3 left-3 bg-[#310D84] border-2 border-[#7337FF]"
                        style="box-shadow:-4px 2px 10px 2px rgba(0, 0, 0, 0.6);"></div>
                </div>
                <span class="text-4xl font-extrabold text-white">DevConnect</span>
            </div>


            <div class="rounded-[20px] w-80 p-8 bg-[#310D84]" style="box-shadow:-6px 3px 20px 4px #0000007d">
                <h1 class="text-white text-3xl font-bold mb-4">Register</h1>

                {{-- Display Validation Errors --}}
                @if ($errors->any())
                    <div class="bg-red-500 text-white text-sm p-3 rounded mb-4">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                {{-- Display Success Message (though typically after register, you'd redirect) --}}
                @if (session('success'))
                    <div class="bg-green-500 text-white text-sm p-3 rounded mb-4">
                        {{ session('success') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('register') }}">
                    @csrf {{-- CSRF token for security --}}
                    <div class="space-y-4">
                        <input type="text" name="name" placeholder="Full Name" value="{{ old('name') }}"
                            class="bg-[#8777BA] w-full p-2.5 rounded-md placeholder:text-gray-300 shadow-md shadow-blue-950 @error('name') border border-red-500 @enderror" />
                        @error('name')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror

                        <input type="email" name="email" placeholder="Email address" value="{{ old('email') }}"
                            class="bg-[#8777BA] w-full p-2.5 rounded-md placeholder:text-gray-300 shadow-md shadow-blue-950 @error('email') border border-red-500 @enderror" />
                        @error('email')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror

                        <input type="password" name="password" placeholder="Password"
                            class="bg-[#8777BA] w-full p-2.5 rounded-md placeholder:text-gray-300 shadow-md shadow-blue-950 @error('password') border border-red-500 @enderror" />
                        @error('password')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror

                        <input type="password" name="password_confirmation" placeholder="Confirm Password"
                            class="bg-[#8777BA] w-full p-2.5 rounded-md placeholder:text-gray-300 shadow-md shadow-blue-950" />
                    </div>
                    <div class="mb-6 mt-4">
                        <label class="flex items-center text-gray-300 text-sm">
                            <input type="checkbox" class="form-checkbox h-4 w-4 text-[#228CE0] rounded-sm mr-2" />
                            I agree to the <span class="text-[#228CE0] cursor-pointer ml-1">Terms and Conditions</span>
                        </label>
                    </div>
                    <div class="flex justify-center mb-4">
                        <button type="submit"
                            class="h-10 w-full cursor-pointer text-white rounded-md bg-gradient-to-br from-[#7336FF] to-[#3269FF] shadow-md shadow-blue-950">
                            Sign Up
                        </button>
                    </div>
                </form>

                <div class="text-gray-300 text-center">
                    Already have an account?<a href="{{ route('login') }}" class="text-[#228CE0] cursor-pointer">
                        Sign In</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

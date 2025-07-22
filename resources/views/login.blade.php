<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DevConnect - Login</title>
    <link rel="preload" as="image" href="https://res.cloudinary.com/dkt1t22qc/image/upload/v1742348949/Prestataires_Documents/smj7n1bdlpjsfsotwpco.png" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-cover bg-gradient-to-br from-[#7337FF] via-[#000000] to-[#0C7EA8]"
    style="background-image:url(https://res.cloudinary.com/dkt1t22qc/image/upload/v1742348950/Prestataires_Documents/fopt5esl9cgvlcawz1z4.jpg)">
    <div class="h-screen flex justify-center items-center backdrop-brightness-50">
        <div class="flex flex-col items-center space-y-8">
            <div>
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
                    <h1 class="text-white text-3xl font-bold mb-4">Login</h1>

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

                    {{-- Display Success Message --}}
                    @if (session('success'))
                        <div class="bg-green-500 text-white text-sm p-3 rounded mb-4">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('login') }}">
                        @csrf {{-- CSRF token for security --}}
                        <div class="space-y-4">
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
                        </div>
                        <div class="mb-4">
                            <span class="text-[#228CE0] text-[10px] ml-2 cursor-pointer">Forget Password?</span>
                        </div>
                        <div class="flex justify-center mb-4">
                            <button type="submit"
                                class="h-10 w-full cursor-pointer text-white rounded-md bg-gradient-to-br from-[#7336FF] to-[#3269FF] shadow-md shadow-blue-950">
                                Sign In
                            </button>
                        </div>
                    </form>

                    <div class="text-gray-300 text-center">
                        Don&#x27;t have an account?<a href="{{ route('register') }}" class="text-[#228CE0] cursor-pointer">
                            Sign up</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

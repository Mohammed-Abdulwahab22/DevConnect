<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage - DevConnect Posts</title>
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
<header class="flex justify-between items-center px-8 py-4 mb-8 backdrop-brightness-50 ">
    <div class="flex items-center space-x-4">
        <div class="flex items-center space-x-3 ">
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
        <ul class="flex space-x-6 text-white text-lg">
            <li><x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link></li>
            <li><x-nav-link href="/profile" :active="request()->is('profile')">Profile</x-nav-link></li>
            <li><x-nav-link href="/settings" :active="request()->is('settings')">Settings</x-nav-link></li>
            {{-- <li><x-nav-link href="/" :active="request()->is('/')">Logout</x-nav-link></li> --}}
            <li>
                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf
                    <button type="submit" class="your-tailwind-classes-here">
                        Logout
                    </button>
                </form>
            </li>

        </ul>
    </nav>
</header>

<body class="bg-cover bg-gradient-to-br from-[#7337FF] via-[#000000] to-[#0C7EA8] min-h-screen"
    style="background-image:url(https://res.cloudinary.com/dkt1t22qc/image/upload/v1742348950/Prestataires_Documents/fopt5esl9cgvlcawz1z4.jpg)">

    {{ $slot }}
</body>

</html>

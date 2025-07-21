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
<x-nav-link></x-nav-link>
<body class="bg-cover bg-gradient-to-br from-[#7337FF] via-[#000000] to-[#0C7EA8] min-h-screen"
    style="background-image:url(https://res.cloudinary.com/dkt1t22qc/image/upload/v1742348950/Prestataires_Documents/fopt5esl9cgvlcawz1z4.jpg)">

    {{ $slot }}
</body>

</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=playfair-display:500,600,700|source-sans-3:400,500,600"
        rel="stylesheet" />

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen bg-gradient-to-br from-[#fbf5ff] via-[#f3e9ff] to-[#efe1ff] text-[#24132e]">
    <div class="mx-auto flex min-h-screen max-w-3xl flex-col items-center justify-center px-6 py-12 text-center">
        <p class="text-xs uppercase tracking-[0.3em] text-[#7b3db3]">Response saved</p>
        <h1 class="mt-4 font-['Playfair Display'] text-3xl font-semibold sm:text-4xl">Thank you for saying yes.</h1>
        <p class="mt-4 text-sm text-[#6a5477]">
            I'll see you on February 14. 
        </p>
        <a href="{{ url('/') }}"
            class="mt-8 inline-flex items-center justify-center rounded-full bg-[#7b3db3] px-6 py-3 text-sm font-semibold text-white shadow-lg shadow-purple-200 transition hover:-translate-y-0.5">
            Back to itinerary
        </a>
    </div>
</body>

</html>

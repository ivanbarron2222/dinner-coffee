<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }} - Admin Access</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=playfair-display:500,600,700|source-sans-3:400,500,600"
        rel="stylesheet" />

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen bg-gradient-to-br from-[#fbf5ff] via-[#f3e9ff] to-[#efe1ff] text-[#24132e]">
    <div class="mx-auto flex min-h-screen max-w-md items-center px-6">
        <div class="w-full rounded-3xl border border-white/70 bg-white/70 p-6 shadow-xl shadow-purple-100 backdrop-blur">
            <p class="text-xs uppercase tracking-[0.3em] text-[#7b3db3]">Admin</p>
            <h1 class="mt-2 font-['Playfair Display'] text-2xl font-semibold">Enter Access Code</h1>

            <form class="mt-4 space-y-3" method="POST" action="{{ route('rsvp.login') }}">
                @csrf
                <input type="password" name="code" placeholder="Code"
                    class="w-full rounded-2xl border border-[#ead9fb] bg-white px-4 py-3 text-sm outline-none focus:ring-2 focus:ring-[#b78dde]" />
                @error('code')
                    <p class="text-xs text-red-600">{{ $message }}</p>
                @enderror
                <button type="submit"
                    class="w-full rounded-2xl bg-[#7b3db3] px-4 py-3 text-sm font-semibold text-white">
                    Unlock
                </button>
            </form>
        </div>
    </div>
</body>

</html>

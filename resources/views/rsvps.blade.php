<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }} - RSVPs</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=playfair-display:500,600,700|source-sans-3:400,500,600"
        rel="stylesheet" />

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen bg-gradient-to-br from-[#fbf5ff] via-[#f3e9ff] to-[#efe1ff] text-[#24132e]">
    <div class="mx-auto max-w-5xl px-6 py-10">
        <header class="mb-6 flex flex-wrap items-center justify-between gap-4">
            <div>
                <p class="text-xs uppercase tracking-[0.3em] text-[#7b3db3]">RSVP Admin</p>
                <h1 class="mt-2 font-['Playfair Display'] text-2xl font-semibold">Responses</h1>
            </div>
            <a href="{{ url('/') }}"
                class="rounded-full border border-[#b78dde] bg-white px-4 py-2 text-sm font-semibold text-[#5a2d82]">
                Back to page
            </a>
        </header>

        <div class="rounded-3xl border border-white/70 bg-white/70 p-5 shadow-xl shadow-purple-100 backdrop-blur">
            <div class="overflow-x-auto">
                <table class="w-full text-sm">
                    <thead class="text-left text-[#6a5477]">
                        <tr>
                            <th class="py-2 pr-4">Answer</th>
                            <th class="py-2 pr-4">IP</th>
                            <th class="py-2 pr-4">User Agent</th>
                            <th class="py-2">Created</th>
                        </tr>
                    </thead>
                    <tbody class="text-[#24132e]">
                        @forelse ($rsvps as $rsvp)
                            <tr class="border-t border-[#ead9fb]">
                                <td class="py-2 pr-4 font-semibold">{{ $rsvp->answer }}</td>
                                <td class="py-2 pr-4">{{ $rsvp->ip_address }}</td>
                                <td class="py-2 pr-4 max-w-[360px] truncate" title="{{ $rsvp->user_agent }}">
                                    {{ $rsvp->user_agent }}
                                </td>
                                <td class="py-2">{{ $rsvp->created_at->format('Y-m-d H:i:s') }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td class="py-6 text-center text-[#6a5477]" colspan="4">No responses yet.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>

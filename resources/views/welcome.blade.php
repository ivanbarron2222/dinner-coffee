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

<body
    class="min-h-screen bg-gradient-to-br from-[#fbf5ff] via-[#f3e9ff] to-[#efe1ff] text-[#24132e]">
    <div class="mx-auto flex min-h-screen max-w-6xl flex-col gap-4 px-5 py-5 lg:px-7">
        <header class="flex flex-wrap items-center justify-between gap-4">
            <div>
                <p class="text-sm uppercase tracking-[0.3em] text-[#7b3db3]">February 14, 2026</p>
            </div>
        </header>

        <main class="grid gap-4 lg:grid-cols-[0.78fr_1.22fr] lg:items-start">
            <aside class="flex flex-col gap-4">
                <div class="rounded-3xl border border-[#ead9fb] bg-white/70 p-5 shadow-lg shadow-purple-100">
                    <p class="text-sm uppercase tracking-[0.25em] text-[#7b3db3]">Note</p>
                    <p class="mt-3 text-xs leading-relaxed text-[#6a5477]">
                        I was wondering if you might be free on February 14, 2026.
                        If you are, and if it's okay with you, I'd love to take you on a simple date that day.
                        We'll have dinner and get some coffee afterward.
                        Since it's a Saturday, I can pick you up after my shift ends at 5:00 PM.
                    </p>
                </div>
                <div class="rounded-3xl border border-[#ead9fb] bg-white/70 p-3 shadow-lg shadow-purple-100">
                    <div class="grid grid-cols-2 gap-2">
                        <div class="aspect-square overflow-hidden rounded-2xl bg-[#f2e6fb]">
                            <img src="{{ asset('images/scene.jpg') }}" alt="Scene"
                                class="h-full w-full object-cover" />
                        </div>
                        <div class="aspect-square overflow-hidden rounded-2xl bg-[#f2e6fb]">
                            <img src="{{ asset('images/tulips.jpg') }}" alt="Tulips"
                                class="h-full w-full object-cover" />
                        </div>
                    </div>
                </div>
                <div class="rounded-3xl border border-[#ead9fb] bg-white/70 p-4 shadow-lg shadow-purple-100">
                    <p class="text-sm uppercase tracking-[0.25em] text-[#7b3db3]">RSVP</p>
                    <p class="mt-2 text-xs text-[#6a5477]">Tap "Yes" if you want to do this on Feb 14.</p>
                    <form class="mt-4 grid grid-cols-2 gap-3" method="POST" action="{{ route('rsvp.store') }}">
                        @csrf
                        <button id="rsvp-yes" type="submit" name="answer" value="yes"
                            class="w-full rounded-2xl bg-[#7b3db3] px-4 py-2.5 text-sm font-semibold text-white transition-transform duration-200">
                            Yes, I'm in
                        </button>
                        <div id="rsvp-no-zone" class="relative h-11">
                            <button id="rsvp-no" type="submit" name="answer" value="no"
                                class="absolute left-0 top-0 rounded-2xl border border-[#b78dde] bg-white px-4 py-2.5 text-sm font-semibold text-[#5a2d82]">
                                No, maybe later
                            </button>
                        </div>
                    </form>
                </div>
                <div class="rounded-3xl border border-[#ead9fb] bg-white/70 p-4 shadow-lg shadow-purple-100">
                    <div class="aspect-[16/9] overflow-hidden rounded-2xl bg-[#f2e6fb]">
                        <img src="{{ asset('images/ribbon.jpg') }}" alt="Ribbon" class="h-full w-full object-cover" />
                    </div>
                </div>
            </aside>
            <div class="flex flex-col gap-4">
                <section
                    class="rounded-3xl border border-[#ead9fb] bg-white/60 p-5 shadow-xl shadow-purple-100 backdrop-blur">
                    <p class="text-xs uppercase tracking-[0.25em] text-[#7b3db3]">Itinerary</p>
                    <h2 class="mt-2 font-['Playfair Display'] text-xl font-semibold">Dinner & Coffee</h2>
                    <div class="mt-3 grid gap-1 text-xs text-[#5d476b]">
                        <p><span class="font-semibold text-[#4b2a63]">Date:</span> February 14</p>
                        <p><span class="font-semibold text-[#4b2a63]">Occasion:</span> Valentine's Dinner & Coffee Date
                        </p>
                        <p><span class="font-semibold text-[#4b2a63]">Location:</span> General Trias, Cavite</p>
                        <p><span class="font-semibold text-[#4b2a63]">Dress Code:</span> Smart casual</p>
                    </div>

                    <div class="mt-4 grid gap-3 sm:grid-cols-2">
                        <div class="w-full max-w-[320px] rounded-2xl border border-[#ead9fb] bg-white/70 p-3">
                            <p class="text-xs uppercase tracking-[0.25em] text-[#7b3db3]">5:00 PM - 5:15 PM</p>
                            <p class="mt-2 font-semibold">Pick-up</p>
                            <p class="mt-1 text-xs text-[#6a5477]">End of your shift. Travel to her house. Arrival
                                around
                                5:15 PM.</p>
                        </div>
                        <div class="w-full max-w-[320px] rounded-2xl border border-[#ead9fb] bg-white/70 p-3">
                            <p class="text-xs uppercase tracking-[0.25em] text-[#7b3db3]">5:15 PM - 5:35 PM</p>
                            <p class="mt-2 font-semibold">Travel to Dinner</p>
                            <p class="mt-1 text-xs text-[#6a5477]">From her house to Yang Chow Bacao. Estimated 15-20
                                minutes.</p>
                        </div>
                        <div class="w-full max-w-[320px] rounded-2xl border border-[#ead9fb] bg-white/70 p-3">
                            <p class="text-xs uppercase tracking-[0.25em] text-[#7b3db3]">5:35 PM - 7:00 PM</p>
                            <p class="mt-2 font-semibold">Dinner</p>
                            <p class="mt-1 text-xs text-[#6a5477]">Yang Chow Bacao, Bacao II, General Trias. Duration:
                                ~1
                                hour to 1.5 hours.</p>
                        </div>
                        <div class="w-full max-w-[320px] rounded-2xl border border-[#ead9fb] bg-white/70 p-3">
                            <p class="text-xs uppercase tracking-[0.25em] text-[#7b3db3]">7:00 PM - 7:20 PM</p>
                            <p class="mt-2 font-semibold">Travel to Coffee Spot</p>
                            <p class="mt-1 text-xs text-[#6a5477]">Travel to Hosanna Cafe. Address: 3rd Floor Pasdek da
                                Marquez, Brgy. Tejero.</p>
                        </div>
                        <div class="w-full max-w-[320px] rounded-2xl border border-[#ead9fb] bg-white/70 p-3">
                            <p class="text-xs uppercase tracking-[0.25em] text-[#7b3db3]">7:20 PM - 8:30 PM</p>
                            <p class="mt-2 font-semibold">Coffee & Dessert</p>
                            <p class="mt-1 text-xs text-[#6a5477]">Duration: ~1 hour.</p>
                        </div>
                        <div class="w-full max-w-[320px] rounded-2xl border border-[#ead9fb] bg-white/70 p-3">
                            <p class="text-xs uppercase tracking-[0.25em] text-[#7b3db3]">8:30 PM onwards</p>
                            <p class="mt-2 font-semibold">Walk or Head Home</p>
                            <p class="mt-1 text-xs text-[#6a5477]">Options: short walk nearby or go home.</p>
                        </div>
                    </div>
                </section>
                <section
                    class="rounded-3xl border border-[#ead9fb] bg-white/60 p-4 shadow-xl shadow-purple-100 backdrop-blur">
                    <div class="grid grid-cols-2 gap-2">
                        <div class="aspect-[16/11.5] overflow-hidden rounded-2xl bg-[#f2e6fb]">
                            <img src="{{ asset('images/rose.jpg') }}" alt="Scene"
                                class="h-full w-full object-cover" />
                        </div>
                        <div class="aspect-[16/11.5] overflow-hidden rounded-2xl bg-[#f2e6fb]">
                            <img src="{{ asset('images/good.jpg') }}" alt="Tulips"
                                class="h-full w-full object-cover" />
                        </div>
                    </div>
                </section>
            </div>
        </main>
    </div>
    <script>
        const noButton = document.getElementById('rsvp-no');
        const yesButton = document.getElementById('rsvp-yes');
        const noZone = document.getElementById('rsvp-no-zone');

        const moveNoButton = () => {
            const buttonRect = noButton.getBoundingClientRect();
            const maxX = window.innerWidth - buttonRect.width;
            const maxY = window.innerHeight - buttonRect.height;
            const x = Math.max(8, Math.floor(Math.random() * maxX));
            const y = Math.max(8, Math.floor(Math.random() * maxY));
            noButton.style.position = 'fixed';
            noButton.style.left = `${x}px`;
            noButton.style.top = `${y}px`;
        };

        const hoverCapable = window.matchMedia('(hover: hover)').matches;
        if (hoverCapable) {
            noButton.addEventListener('mouseenter', (event) => {
                moveNoButton();
                event.preventDefault();
            });

            noZone.addEventListener('mousemove', () => {
                const {
                    left,
                    top,
                    width,
                    height
                } = noButton.getBoundingClientRect();
                const pad = 6;
                const inZoneX = Math.max(left - pad, 0);
                const inZoneY = Math.max(top - pad, 0);
                if (width > 0 && height > 0 && inZoneX >= 0 && inZoneY >= 0) {
                    moveNoButton();
                }
            });
        }

        noButton.addEventListener('touchstart', (event) => {
            event.preventDefault();
            yesButton.classList.add('scale-110');
            moveNoButton();
        }, {
            passive: false
        });

        noButton.addEventListener('click', (event) => {
            if (!window.matchMedia('(hover: hover)').matches) {
                event.preventDefault();
                yesButton.classList.add('scale-110');
                moveNoButton();
            }
        });
    </script>
</body>

</html>

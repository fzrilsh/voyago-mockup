{{-- Header / App Bar --}}
<header class="bg-[#f2f1ed] shadow-lg sticky top-0 z-50">
    <div class="container mx-auto px-4">
        <div class="flex">
            {{-- Logo - Spanning 2 rows --}}
            <div class="flex items-center pr-8 py-2">
                <a href="/">
                    <img src="/logo.png" alt="Voyago" class="h-10 w-auto" />
                </a>
            </div>
            
            {{-- Right side: 2 rows of navigation --}}
            <div class="flex-1 flex flex-col justify-center">
                {{-- Top Row: Main Nav + Globe Icon + Auth --}}
                <div class="flex items-center justify-between py-2">
                    {{-- Main Navigation --}}
                    <nav class="flex-1 flex justify-center gap-6">
                        <a href="#best-deals" class="text-zinc-700 hover:text-primary font-semibold text-base transition-colors">Best Deals</a>
                        <a href="#partnership" class="text-zinc-700 hover:text-primary font-semibold text-base transition-colors">Partnership</a>
                        <a href="#custom-trip" class="text-zinc-700 hover:text-primary font-semibold text-base transition-colors">Custom Trip</a>
                        <a href="#inspiration" class="text-zinc-700 hover:text-primary font-semibold text-base transition-colors">Inspiration</a>
                    </nav>

                    {{-- Globe Icon + Auth Buttons --}}
                    <div class="flex items-center gap-3">
                        <button class="text-primary hover:text-primary/80 transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </button>
                        <a href="/register" class="text-primary font-medium hover:text-primary/80 text-base transition-colors">Sign Up</a>
                        <a href="/login" class="text-primary font-medium hover:text-primary/80 text-base transition-colors">Login</a>
                    </div>
                </div>

                {{-- Bottom Row: Sub Navigation --}}
                <div class="py-1.5">
                    <nav class="flex justify-center gap-6">
                        <a href="#popular-destination" class="text-primary hover:text-primary/80 font-bold text-lg transition-colors">Popular Destination</a>
                        <a href="#best-country" class="text-primary hover:text-primary/80 font-bold text-lg transition-colors">Best country</a>
                        <a href="#flights" class="text-primary hover:text-primary/80 font-bold text-lg transition-colors">Flights</a>
                        <a href="#hotels" class="text-primary hover:text-primary/80 font-bold text-lg transition-colors">Hotels</a>
                        <a href="#travel-gifts" class="text-primary hover:text-primary/80 font-bold text-lg transition-colors">Travel Gifts</a>
                        <a href="#group-tours" class="text-primary hover:text-primary/80 font-bold text-lg transition-colors">Group Tours</a>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>

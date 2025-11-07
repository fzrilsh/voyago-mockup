{{-- About Us Section --}}
<section class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            {{-- Left Content --}}
            <div>
                <h2 class="text-4xl font-bold text-zinc-900 mb-6">About Voyago</h2>
                
                <div class="mb-8">
                    <h3 class="text-2xl font-bold text-zinc-900 mb-3">What is Voyago?</h3>
                    <p class="text-lg text-zinc-600 leading-relaxed">
                        Voyago is your gateway to meaningful travel experiences — from neighbourhood excursions to cross-border adventures. We make it simple, personal, and locally rooted.
                    </p>
                </div>

                <div class="mb-8">
                    <h3 class="text-2xl font-bold text-zinc-900 mb-3">What we do</h3>
                    <p class="text-lg text-zinc-600 leading-relaxed">
                        We connect you with curated experiences across Indonesia and beyond. Whether it's wandering through a hidden village, joining a local artisan workshop, or exploring iconic landmarks, Voyago brings thousands of travel activities together in one place. With just a few taps, you're on your way.
                    </p>
                </div>

                {{-- CTA Button --}}
                <div class="mt-8">
                    <a href="{{ url('/about') }}" class="inline-flex items-center gap-2 bg-primary hover:bg-primary/90 text-white font-semibold py-3 px-6 rounded-lg transition-colors">
                        Your story begins here
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                        </svg>
                    </a>
                </div>
            </div>

            {{-- Right Content - Image Grid --}}
            <div class="grid grid-cols-2 gap-4">
                <div class="space-y-4">
                    <img src="https://images.unsplash.com/photo-1488646953014-85cb44e25828?w=600&h=400&fit=crop" 
                         alt="Travel Experience" 
                         class="rounded-2xl shadow-lg w-full h-64 object-cover">
                    <img src="https://images.unsplash.com/photo-1476514525535-07fb3b4ae5f1?w=600&h=300&fit=crop" 
                         alt="Beach Destination" 
                         class="rounded-2xl shadow-lg w-full h-48 object-cover">
                </div>
                <div class="space-y-4 mt-8">
                    <img src="https://images.unsplash.com/photo-1503220317375-aaad61436b1b?w=600&h=300&fit=crop" 
                         alt="Mountain Adventure" 
                         class="rounded-2xl shadow-lg w-full h-48 object-cover">
                    <img src="https://images.unsplash.com/photo-1469854523086-cc02fe5d8800?w=600&h=400&fit=crop" 
                         alt="City Exploration" 
                         class="rounded-2xl shadow-lg w-full h-64 object-cover">
                </div>
            </div>
        </div>

        {{-- Our Values --}}
        <div class="mt-20">
            <h3 class="text-3xl font-bold text-center text-zinc-900 mb-4">Why choose Voyago?</h3>
            <p class="text-center text-lg text-zinc-600 max-w-3xl mx-auto mb-12">
                We believe travel is more than just sightseeing. It's about connection—with places, with people, and with yourself. Voyago is here to help you explore in a way that matters.
            </p>
            <div class="grid md:grid-cols-4 gap-8">
                {{-- Value 1 --}}
                <div class="text-center">
                    <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/>
                        </svg>
                    </div>
                    <h4 class="font-bold text-zinc-900 mb-2">Personalized & Curated</h4>
                    <p class="text-sm text-zinc-600">We hand-select each experience with local teams that know the place best.</p>
                </div>

                {{-- Value 2 --}}
                <div class="text-center">
                    <div class="w-16 h-16 bg-orange/10 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-orange" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </div>
                    <h4 class="font-bold text-zinc-900 mb-2">Easy & Reliable</h4>
                    <p class="text-sm text-zinc-600">From discovery to booking to the moment you arrive, we make your journey smooth.</p>
                </div>

                {{-- Value 3 --}}
                <div class="text-center">
                    <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h4 class="font-bold text-zinc-900 mb-2">Deep Local Insight</h4>
                    <p class="text-sm text-zinc-600">Our roots in the region bring you access to stories, guides, and experiences you won't find in a chain-tour catalogue.</p>
                </div>

                {{-- Value 4 --}}
                <div class="text-center">
                    <div class="w-16 h-16 bg-orange/10 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-orange" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                        </svg>
                    </div>
                    <h4 class="font-bold text-zinc-900 mb-2">Global Standard, Local Heart</h4>
                    <p class="text-sm text-zinc-600">Backed by strong partnerships and technology, we bring global marketplace reliability while honouring regional authenticity.</p>
                </div>
            </div>
        </div>
    </div>
</section>

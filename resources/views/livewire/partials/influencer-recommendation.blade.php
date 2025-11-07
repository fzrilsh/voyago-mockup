{{-- Influencer Recommendation --}}
<section class="py-16 bg-zinc-50">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold mb-8 text-zinc-900">Influencer Recommendation</h2>
        <div class="flex overflow-x-auto gap-6 pb-4 scrollbar-hide">
            @php
            $recommendations = [
                [
                    'subtitle' => 'ROME, ITALY',
                    'title' => "Vatican Museums, Sistine Chapel & St Peter's Basilica Guided Tour",
                    'rating' => 4.5,
                    'reviews' => 38616,
                    'price' => 670303,
                    'image_url' => 'https://media.tacdn.com/media/attractions-splice-spp-360x240/0f/ba/c1/d8.jpg'
                ],
                [
                    'subtitle' => 'FLORENCE, TUSCANY',
                    'title' => 'Tuscany Day Trip from Florence: Siena, San Gimignano, Pisa and Lunch at a Winery',
                    'rating' => 4.9,
                    'reviews' => 21402,
                    'price' => 2070054,
                    'image_url' => 'https://media.tacdn.com/media/attractions-splice-spp-360x240/07/aa/5c/71.jpg'
                ],
                [
                    'subtitle' => 'CHICAGO, ILLINOIS',
                    'title' => 'Chicago River 90-Minute Architecture Tour',
                    'rating' => 4.7,
                    'reviews' => 9465,
                    'price' => 769884,
                    'image_url' => 'https://media.tacdn.com/media/attractions-splice-spp-360x240/07/36/04/46.jpg'
                ],
                [
                    'subtitle' => 'BARCELONA, CATALONIA',
                    'title' => 'Sagrada Familia Guided Tour with Skip the Line Ticket',
                    'rating' => 4.7,
                    'reviews' => 2778,
                    'price' => 1104029,
                    'image_url' => 'https://media.tacdn.com/media/attractions-splice-spp-360x240/12/3f/c2/e0.jpg'
                ],
                [
                    'subtitle' => 'NEW YORK CITY, NEW YORK',
                    'title' => 'SUMMIT One Vanderbilt Experience Ticket',
                    'rating' => 4.5,
                    'reviews' => 5102,
                    'price' => 819670,
                    'image_url' => 'https://media.tacdn.com/media/attractions-splice-spp-360x240/11/dc/06/69.jpg'
                ],
                [
                    'subtitle' => 'TOKYO, KANTO',
                    'title' => 'Mt Fuji and Hakone 1-Day Bus Tour Return by Bullet Train',
                    'rating' => 4.8,
                    'reviews' => 24482,
                    'price' => 2749853,
                    'image_url' => 'https://media.tacdn.com/media/attractions-splice-spp-360x240/10/26/8a/4c.jpg'
                ],
                [
                    'subtitle' => 'LAS VEGAS, NEVADA',
                    'title' => 'Grand Canyon West, Hoover Dam Stop and Optional Lunch and Skywalk',
                    'rating' => 4.9,
                    'reviews' => 16761,
                    'price' => 1693746,
                    'image_url' => 'https://media.tacdn.com/media/attractions-splice-spp-360x240/15/71/0f/6b.jpg'
                ],
                [
                    'subtitle' => 'LONDON, ENGLAND',
                    'title' => 'Big Bus London Hop-On Hop-Off Tour with Optional River Cruise',
                    'rating' => 3.7,
                    'reviews' => 10716,
                    'price' => 649519,
                    'image_url' => 'https://media.tacdn.com/media/attractions-splice-spp-360x240/07/17/e7/b3.jpg'
                ]
            ];
            @endphp
            
            @foreach($recommendations as $index => $item)
            <a href="{{ url('/product/' . ($index === 0 ? 'vatican-museums-sistine-chapel' : 'tour-' . ($index + 1))) }}" class="min-w-[320px] w-[320px] shrink-0 bg-white rounded-lg border border-zinc-200 shadow-sm overflow-hidden hover:shadow-lg transition-shadow">
                <div class="w-[320px] h-52 overflow-hidden bg-zinc-100">
                    <img src="{{ $item['image_url'] }}" alt="{{ $item['title'] }}" class="w-full h-full object-cover" />
                </div>
                <div class="p-4">
                    <p class="text-sm text-zinc-600 mb-1">{{ $item['subtitle'] }}</p>
                    <h3 class="text-xl font-bold mb-2 text-primary">{{ $item['title'] }}</h3>
                    <p class="text-sm text-zinc-700 mb-3">Book now for today</p>
                    
                    <div class="flex items-center gap-2 mb-3">
                        <svg class="w-5 h-5 text-amber-400 fill-current" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <span class="font-semibold text-zinc-900">{{ $item['rating'] }}</span>
                        <span class="text-sm text-zinc-500">({{ $item['reviews'] }})</span>
                    </div>
                    
                    <div class="mb-0">
                        <span class="text-sm text-zinc-600">from</span>
                        <div class="text-2xl font-bold text-primary">Rp.{{ number_format($item['price'], 0, ',', '.') }}</div>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</section>

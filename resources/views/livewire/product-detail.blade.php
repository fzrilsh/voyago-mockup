<div>
    {{-- Header --}}
    @include('livewire.partials.header')

    {{-- Breadcrumb --}}
    <div class="bg-zinc-50 border-b border-zinc-200">
        <div class="container mx-auto px-4 py-4">
            <div class="flex items-center gap-2 text-sm text-zinc-600">
                <a href="{{ url('/') }}" class="hover:text-primary">Home</a>
                <span>/</span>
                <a href="#" class="hover:text-primary">{{ $product['location'] }}</a>
                <span>/</span>
                <span class="text-zinc-900">{{ $product['title'] }}</span>
            </div>
        </div>
    </div>

    {{-- Main Content --}}
    <div class="container mx-auto px-4 py-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            {{-- Left Column - Product Details --}}
            <div class="lg:col-span-2 space-y-6">
                {{-- Title Section --}}
                <div>
                    @if($product['badge'])
                    <div class="mb-2">
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-orange text-white">
                            {{ $product['badge'] }}
                        </span>
                    </div>
                    @endif
                    <h1 class="text-3xl md:text-4xl font-bold text-zinc-900 mb-2">{{ $product['title'] }}</h1>
                    <p class="text-lg text-zinc-600 mb-4">{{ $product['location'] }}</p>
                    
                    <div class="flex items-center gap-4 flex-wrap">
                        <div class="flex items-center gap-2">
                            <div class="flex items-center">
                                @for($i = 1; $i <= 5; $i++)
                                    @if($i <= floor($product['rating']))
                                    <svg class="w-5 h-5 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                        <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                    </svg>
                                    @else
                                    <svg class="w-5 h-5 text-zinc-300 fill-current" viewBox="0 0 20 20">
                                        <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                    </svg>
                                    @endif
                                @endfor
                            </div>
                            <span class="font-semibold text-zinc-900">{{ $product['rating'] }}</span>
                            <span class="text-zinc-600">({{ number_format($product['reviews']) }} reviews)</span>
                        </div>
                        <div class="flex items-center gap-2 text-zinc-600">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <span>{{ $product['duration'] }}</span>
                        </div>
                    </div>
                </div>

                {{-- Image Gallery --}}
                <div class="relative">
                    <div class="flex overflow-x-auto gap-2 snap-x snap-mandatory scrollbar-hide pb-2">
                        @foreach($product['images'] as $image)
                        <div class="min-w-[85%] md:min-w-[60%] lg:min-w-[70%] snap-center shrink-0">
                            <img src="{{ $image }}" alt="{{ $product['title'] }}" class="w-full h-64 md:h-80 lg:h-96 object-cover rounded-xl hover:opacity-90 transition-opacity cursor-pointer">
                        </div>
                        @endforeach
                    </div>
                    
                    {{-- Scroll Indicator Dots --}}
                    <div class="flex justify-center gap-2 mt-3">
                        @foreach($product['images'] as $index => $image)
                        <div class="w-2 h-2 rounded-full bg-zinc-300"></div>
                        @endforeach
                    </div>
                </div>

                {{-- Tabs Navigation --}}
                <div class="border-b border-zinc-200">
                    <div class="flex gap-8">
                        <button 
                            wire:click="$set('activeTab', 'overview')"
                            class="pb-4 border-b-2 font-semibold transition-colors {{ $activeTab === 'overview' ? 'border-primary text-primary' : 'border-transparent text-zinc-600 hover:text-zinc-900' }}">
                            Overview
                        </button>
                        <button 
                            wire:click="$set('activeTab', 'itinerary')"
                            class="pb-4 border-b-2 font-semibold transition-colors {{ $activeTab === 'itinerary' ? 'border-primary text-primary' : 'border-transparent text-zinc-600 hover:text-zinc-900' }}">
                            What's Included
                        </button>
                        <button 
                            wire:click="$set('activeTab', 'reviews')"
                            class="pb-4 border-b-2 font-semibold transition-colors {{ $activeTab === 'reviews' ? 'border-primary text-primary' : 'border-transparent text-zinc-600 hover:text-zinc-900' }}">
                            Reviews
                        </button>
                    </div>
                </div>

                {{-- Tab Content --}}
                <div>
                    @if($activeTab === 'overview')
                    <div class="space-y-6">
                        {{-- Description --}}
                        <div>
                            <h2 class="text-2xl font-bold text-zinc-900 mb-4">About this experience</h2>
                            <p class="text-zinc-700 leading-relaxed">{{ $product['description'] }}</p>
                        </div>

                        {{-- Highlights --}}
                        <div>
                            <h3 class="text-xl font-bold text-zinc-900 mb-4">Highlights</h3>
                            <ul class="space-y-3">
                                @foreach($product['highlights'] as $highlight)
                                <li class="flex items-start gap-3">
                                    <svg class="w-6 h-6 text-green-500 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    <span class="text-zinc-700">{{ $highlight }}</span>
                                </li>
                                @endforeach
                            </ul>
                        </div>

                        {{-- Additional Info --}}
                        <div class="grid md:grid-cols-2 gap-6">
                            <div class="p-4 bg-zinc-50 rounded-lg">
                                <h4 class="font-semibold text-zinc-900 mb-2 flex items-center gap-2">
                                    <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    </svg>
                                    Meeting Point
                                </h4>
                                <p class="text-sm text-zinc-700">{{ $product['meeting_point'] }}</p>
                            </div>
                            <div class="p-4 bg-zinc-50 rounded-lg">
                                <h4 class="font-semibold text-zinc-900 mb-2 flex items-center gap-2">
                                    <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                                    </svg>
                                    Group Size
                                </h4>
                                <p class="text-sm text-zinc-700">{{ $product['group_size'] }}</p>
                            </div>
                        </div>

                        {{-- Cancellation Policy --}}
                        <div class="p-4 bg-green-50 border border-green-200 rounded-lg">
                            <h4 class="font-semibold text-green-900 mb-2 flex items-center gap-2">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                Free Cancellation
                            </h4>
                            <p class="text-sm text-green-800">{{ $product['cancellation_policy'] }}</p>
                        </div>
                    </div>
                    @endif

                    @if($activeTab === 'itinerary')
                    <div class="space-y-6">
                        <div>
                            <h3 class="text-xl font-bold text-zinc-900 mb-4">What's Included</h3>
                            <ul class="space-y-3">
                                @foreach($product['included'] as $item)
                                <li class="flex items-start gap-3">
                                    <svg class="w-6 h-6 text-green-500 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    <span class="text-zinc-700">{{ $item }}</span>
                                </li>
                                @endforeach
                            </ul>
                        </div>

                        <div>
                            <h3 class="text-xl font-bold text-zinc-900 mb-4">What's Not Included</h3>
                            <ul class="space-y-3">
                                @foreach($product['not_included'] as $item)
                                <li class="flex items-start gap-3">
                                    <svg class="w-6 h-6 text-red-500 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                                    </svg>
                                    <span class="text-zinc-700">{{ $item }}</span>
                                </li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="p-4 bg-zinc-50 rounded-lg">
                            <h4 class="font-semibold text-zinc-900 mb-2">Languages</h4>
                            <div class="flex flex-wrap gap-2">
                                @foreach($product['languages'] as $language)
                                <span class="px-3 py-1 bg-white border border-zinc-200 rounded-full text-sm text-zinc-700">{{ $language }}</span>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    @endif

                    @if($activeTab === 'reviews')
                    <div class="space-y-6">
                        {{-- Review Summary --}}
                        <div class="p-6 bg-zinc-50 rounded-lg">
                            <div class="grid md:grid-cols-2 gap-6">
                                <div>
                                    <div class="text-5xl font-bold text-zinc-900 mb-2">{{ $product['rating'] }}</div>
                                    <div class="flex items-center mb-2">
                                        @for($i = 1; $i <= 5; $i++)
                                            @if($i <= floor($product['rating']))
                                            <svg class="w-6 h-6 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                                <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                            </svg>
                                            @else
                                            <svg class="w-6 h-6 text-zinc-300 fill-current" viewBox="0 0 20 20">
                                                <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                            </svg>
                                            @endif
                                        @endfor
                                    </div>
                                    <p class="text-zinc-600">Based on {{ number_format($product['reviews']) }} reviews</p>
                                </div>
                                <div class="space-y-2">
                                    @foreach(['5' => 85, '4' => 10, '3' => 3, '2' => 1, '1' => 1] as $star => $percentage)
                                    <div class="flex items-center gap-3">
                                        <span class="text-sm text-zinc-600 w-12">{{ $star }} stars</span>
                                        <div class="flex-1 h-2 bg-zinc-200 rounded-full overflow-hidden">
                                            <div class="h-full bg-yellow-400" style="width: {{ $percentage }}%"></div>
                                        </div>
                                        <span class="text-sm text-zinc-600 w-12 text-right">{{ $percentage }}%</span>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        {{-- Individual Reviews --}}
                        <div class="space-y-6">
                            @php
                            $reviews = [
                                [
                                    'name' => 'Sarah Johnson',
                                    'date' => 'October 2024',
                                    'rating' => 5,
                                    'title' => 'Absolutely Amazing Experience!',
                                    'content' => 'Our guide was incredibly knowledgeable and passionate about the art and history. Skip-the-line access was worth every penny - saved us hours of waiting. The Sistine Chapel was breathtaking!'
                                ],
                                [
                                    'name' => 'Michael Chen',
                                    'date' => 'October 2024',
                                    'rating' => 5,
                                    'title' => 'Highly Recommended',
                                    'content' => 'Perfect tour for first-time visitors. Our guide made the history come alive with fascinating stories. The small group size made it easy to ask questions and have a personal experience.'
                                ],
                                [
                                    'name' => 'Emma Williams',
                                    'date' => 'September 2024',
                                    'rating' => 4,
                                    'title' => 'Great tour with minor issues',
                                    'content' => 'Overall a wonderful experience. The Vatican is stunning and our guide was excellent. Only downside was it felt a bit rushed in some areas, but I understand there\'s a lot to cover.'
                                ],
                            ];
                            @endphp

                            @foreach($reviews as $review)
                            <div class="p-6 border border-zinc-200 rounded-lg">
                                <div class="flex items-start justify-between mb-3">
                                    <div>
                                        <h4 class="font-semibold text-zinc-900">{{ $review['name'] }}</h4>
                                        <p class="text-sm text-zinc-600">{{ $review['date'] }}</p>
                                    </div>
                                    <div class="flex items-center">
                                        @for($i = 1; $i <= 5; $i++)
                                            @if($i <= $review['rating'])
                                            <svg class="w-5 h-5 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                                <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                            </svg>
                                            @else
                                            <svg class="w-5 h-5 text-zinc-300 fill-current" viewBox="0 0 20 20">
                                                <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                            </svg>
                                            @endif
                                        @endfor
                                    </div>
                                </div>
                                <h5 class="font-semibold text-zinc-900 mb-2">{{ $review['title'] }}</h5>
                                <p class="text-zinc-700">{{ $review['content'] }}</p>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @endif
                </div>
            </div>

            {{-- Right Column - Booking Card --}}
            <div class="lg:col-span-1">
                <div class="sticky top-4 border border-zinc-200 rounded-xl p-6 bg-white shadow-lg">
                    <div class="mb-6">
                        <div class="flex items-baseline gap-2 mb-1">
                            <span class="text-3xl font-bold text-zinc-900">Rp {{ number_format($product['price']) }}</span>
                            <span class="text-zinc-600">/ person</span>
                        </div>
                        @if(isset($product['original_price']))
                        <div class="flex items-center gap-2">
                            <span class="text-sm text-zinc-500 line-through">Rp {{ number_format($product['original_price']) }}</span>
                            <span class="text-sm text-green-600 font-semibold">Save {{ round((($product['original_price'] - $product['price']) / $product['original_price']) * 100) }}%</span>
                        </div>
                        @endif
                    </div>

                    <div class="space-y-4 mb-6">
                        {{-- Date Selection --}}
                        <div>
                            <label class="block text-sm font-semibold text-zinc-900 mb-2">Select Date</label>
                            <input type="date" wire:model="selectedDate" class="w-full px-4 py-3 border border-zinc-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                        </div>

                        {{-- Time Selection --}}
                        <div>
                            <label class="block text-sm font-semibold text-zinc-900 mb-2">Select Time</label>
                            <select wire:model="selectedTime" class="w-full px-4 py-3 border border-zinc-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                                <option value="">Choose a time</option>
                                <option value="09:00">09:00 AM</option>
                                <option value="11:00">11:00 AM</option>
                                <option value="14:00">02:00 PM</option>
                                <option value="16:00">04:00 PM</option>
                            </select>
                        </div>

                        {{-- Travelers --}}
                        <div>
                            <label class="block text-sm font-semibold text-zinc-900 mb-2">Travelers</label>
                            <div class="space-y-3">
                                <div class="flex items-center justify-between">
                                    <span class="text-zinc-700">Adults</span>
                                    <div class="flex items-center gap-3">
                                        <button wire:click="decrementAdults" type="button" class="w-8 h-8 flex items-center justify-center rounded-full border border-zinc-300 hover:bg-zinc-50">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"/>
                                            </svg>
                                        </button>
                                        <span class="w-8 text-center font-semibold">{{ $adults }}</span>
                                        <button wire:click="incrementAdults" type="button" class="w-8 h-8 flex items-center justify-center rounded-full border border-zinc-300 hover:bg-zinc-50">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <div class="flex items-center justify-between">
                                    <span class="text-zinc-700">Children (0-17)</span>
                                    <div class="flex items-center gap-3">
                                        <button wire:click="decrementChildren" type="button" class="w-8 h-8 flex items-center justify-center rounded-full border border-zinc-300 hover:bg-zinc-50">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"/>
                                            </svg>
                                        </button>
                                        <span class="w-8 text-center font-semibold">{{ $children }}</span>
                                        <button wire:click="incrementChildren" type="button" class="w-8 h-8 flex items-center justify-center rounded-full border border-zinc-300 hover:bg-zinc-50">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Total Price --}}
                    <div class="border-t border-zinc-200 pt-4 mb-6">
                        <div class="flex items-center justify-between text-lg font-bold">
                            <span class="text-zinc-900">Total</span>
                            <span class="text-primary">Rp {{ number_format($this->getTotalPrice()) }}</span>
                        </div>
                    </div>

                    {{-- Book Button --}}
                    <button wire:click="bookNow" class="w-full bg-primary hover:bg-primary/90 text-white font-semibold py-4 rounded-lg transition-colors">
                        Book Now
                    </button>

                    <p class="text-xs text-center text-zinc-600 mt-4">You won't be charged yet</p>

                    {{-- Contact Info --}}
                    <div class="mt-6 pt-6 border-t border-zinc-200 text-center">
                        <p class="text-sm text-zinc-600 mb-2">Questions? We're here to help</p>
                        <a href="#" class="text-sm text-primary hover:underline font-semibold">Contact Support</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Footer --}}
    @include('livewire.partials.footer')
</div>

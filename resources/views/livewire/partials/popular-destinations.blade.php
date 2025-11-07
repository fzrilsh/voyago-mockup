{{-- Popular Destinations --}}
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold mb-8 text-center text-zinc-900">Where's to next?</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @php
            $destinations = [
                ['name' => 'Singapore', 'image' => 'photo-1525625293386-3f8f99389edd'],
                ['name' => 'New York', 'image' => 'photo-1496442226666-8d4d0e62e6e9'],
                ['name' => 'Toronto', 'image' => 'photo-1517935706615-2717063c2225'],
                ['name' => 'Bangkok', 'image' => 'photo-1508009603885-50cf7c579365'],
                ['name' => 'New Zealand', 'image' => 'photo-1507699622108-4be3abd695ad'],
                ['name' => 'Kazakhstan', 'image' => 'photo-1559827260-dc66d52bef19'],
            ];
            @endphp
            
            @foreach($destinations as $destination)
            <div class="overflow-hidden group cursor-pointer bg-white rounded-lg border border-zinc-200 shadow-sm hover:shadow-lg transition-shadow">
                <div class="relative h-64 overflow-hidden">
                    <img src="https://images.unsplash.com/{{ $destination['image'] }}?w=600&h=400&fit=crop" 
                         alt="{{ $destination['name'] }}" 
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300" />
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6">
                        <h3 class="text-3xl font-bold text-white">{{ $destination['name'] }}</h3>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        
        {{-- See More Button --}}
        <div class="text-center mt-10">
            <x-flux::button variant="filled" class="!text-primary hover:!bg-primary hover:!text-white px-8 py-3 text-4xl uppercase font-bold">
                See more
            </x-flux::button>
        </div>
    </div>
</section>

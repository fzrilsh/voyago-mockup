{{-- Newsletter & App Promo --}}
<section class="py-16 bg-primary">
    <div class="container mx-auto px-4">
        <div class="text-center mb-8">
            <h2 class="text-3xl font-bold !text-white mb-4">Stay updated with travel tips & exclusive offers</h2>
            <p class="text-lg !text-white/80">Subscribe to our newsletter and never miss a deal</p>
        </div>
        
        <div class="flex justify-center mb-12">
            <div class="flex w-full max-w-xl gap-2">
                <x-flux::input type="email" placeholder="Enter your email address" class="flex-1" />
                <x-flux::button class="bg-accent hover:bg-accent/90">Subscribe</x-flux::button>
            </div>
        </div>

        <div class="flex flex-col md:flex-row justify-center items-center gap-8">
            <div class="bg-white p-4 rounded-lg">
                <img src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=https://voyago.com/app" 
                     alt="QR Code" 
                     class="w-32 h-32" />
            </div>
            <div class="text-center md:text-left">
                <h3 class="text-xl font-bold !text-white mb-4">Get The App</h3>
                <div class="flex flex-col gap-3">
                    <a href="#" class="inline-block">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/7/78/Google_Play_Store_badge_EN.svg" 
                             alt="Get it on Google Play" 
                             class="h-12" />
                    </a>
                    <a href="#" class="inline-block">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/3/3c/Download_on_the_App_Store_Badge.svg" 
                             alt="Download on the App Store" 
                             class="h-12" />
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

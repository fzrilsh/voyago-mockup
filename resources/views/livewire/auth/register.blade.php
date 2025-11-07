<div class="min-h-screen bg-zinc-50 flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full">
        <div class="bg-white rounded-2xl shadow-xl p-8">
                        <div class="w-full max-w-md">
                <div class="text-center mb-8">
                    <img src="{{ asset('logo.png') }}" alt="Voyago" class="h-12 w-auto mx-auto" />
                    <h1 class="text-3xl font-bold text-zinc-900 mb-2 mt-4">Create Account</h1>
                    <p class="text-zinc-600">Join Voyago and start your journey</p>
                </div>

            <form wire:submit.prevent class="space-y-6">
                <div>
                    <label class="block text-sm font-medium text-zinc-900 mb-2">Full Name</label>
                    <x-flux::input 
                        wire:model="name" 
                        type="text" 
                        placeholder="John Doe"
                        icon="user" 
                    />
                </div>

                <div>
                    <label class="block text-sm font-medium text-zinc-900 mb-2">Email Address</label>
                    <x-flux::input 
                        wire:model="email" 
                        type="email" 
                        placeholder="you@example.com"
                        icon="envelope" 
                    />
                </div>

                <div>
                    <label class="block text-sm font-medium text-zinc-900 mb-2">Password</label>
                    <x-flux::input 
                        wire:model="password" 
                        type="password" 
                        placeholder="Create a password"
                        icon="lock-closed" 
                    />
                </div>

                <div>
                    <label class="block text-sm font-medium text-zinc-900 mb-2">Confirm Password</label>
                    <x-flux::input 
                        wire:model="password_confirmation" 
                        type="password" 
                        placeholder="Confirm your password"
                        icon="lock-closed" 
                    />
                </div>

                <div>
                    <label class="flex items-center gap-2 text-sm text-zinc-900">
                        <input type="checkbox" class="rounded border-zinc-300 text-primary focus:ring-primary" />
                        <span>I agree to the Terms of Service and Privacy Policy</span>
                    </label>
                </div>

                <button type="submit" class="w-full bg-primary hover:bg-primary/90 text-white font-semibold py-3 px-4 rounded-lg transition-colors shadow-sm">
                    Create Account
                </button>

                <div class="text-center text-sm text-zinc-600">
                    Already have an account? 
                    <a href="/login" class="text-primary hover:text-primary/80 font-medium">
                        Sign in
                    </a>
                </div>
            </form>

            <div class="mt-8 pt-8 border-t border-zinc-200">
                <a href="/" class="text-sm text-zinc-600 hover:text-primary flex items-center justify-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                    </svg>
                    Back to Home
                </a>
            </div>
        </div>
    </div>
</div>

<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.app')]
class Homepage extends Component
{
    public function render()
    {
        return view('livewire.homepage', [
            'title' => 'Voyago - Discover Amazing Tours & Travel Experiences',
            'description' => 'Book unforgettable tours and travel experiences with Voyago. Explore top destinations, activities, and cultural experiences around the world.',
            'image' => asset('logo.png'),
        ]);
    }
}

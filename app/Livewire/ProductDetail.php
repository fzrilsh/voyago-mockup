<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layouts.app')]
class ProductDetail extends Component
{
    public $productId;

    public $product;

    public $selectedDate;

    public $selectedTime;

    public $adults = 1;

    public $children = 0;

    public $activeTab = 'overview';

    public function mount($id)
    {
        $this->productId = $id;
        $this->loadProduct();
    }

    public function loadProduct()
    {
        // Mock data - replace with actual database query
        $products = [
            'vatican-museums-sistine-chapel' => [
                'id' => 'vatican-museums-sistine-chapel',
                'title' => "Vatican Museums, Sistine Chapel & St Peter's Basilica Guided Tour",
                'location' => 'Rome, Italy',
                'rating' => 4.5,
                'reviews' => 38616,
                'price' => 670303,
                'original_price' => 750000,
                'duration' => '3 hours',
                'badge' => 'Best Seller',
                'images' => [
                    'https://images.unsplash.com/photo-1531572753322-ad063cecc140?w=1200',
                    'https://images.unsplash.com/photo-1552832230-c0197dd311b5?w=1200',
                    'https://images.unsplash.com/photo-1553969420-fb915228af51?w=1200',
                    'https://images.unsplash.com/photo-1583422095360-c70fbbb4b42e?w=1200',
                ],
                'description' => 'Skip the long lines and explore the Vatican Museums, Sistine Chapel, and St. Peter\'s Basilica with an expert guide. Marvel at masterpieces by Michelangelo, Raphael, and more.',
                'highlights' => [
                    'Skip-the-line access to Vatican Museums',
                    'Visit the famous Sistine Chapel',
                    'Explore St. Peter\'s Basilica',
                    'Expert guide with deep knowledge of art and history',
                    'Small group tour for a more intimate experience',
                    'Headsets provided for groups over 10 people',
                ],
                'included' => [
                    'Professional guide',
                    'Skip-the-line entrance tickets',
                    'Headsets (for groups over 10)',
                    'All taxes and fees',
                ],
                'not_included' => [
                    'Hotel pickup and drop-off',
                    'Food and drinks',
                    'Gratuities',
                ],
                'meeting_point' => 'Via Germanico, 8, 00192 Roma RM, Italy',
                'cancellation_policy' => 'Free cancellation up to 24 hours before the experience starts',
                'languages' => ['English', 'Spanish', 'French', 'German', 'Italian'],
                'group_size' => 'Maximum 20 travelers',
                'accessibility' => 'Not wheelchair accessible',
            ],
        ];

        $this->product = $products[$this->productId] ?? $products['vatican-museums-sistine-chapel'];
    }

    public function incrementAdults()
    {
        $this->adults++;
    }

    public function decrementAdults()
    {
        if ($this->adults > 1) {
            $this->adults--;
        }
    }

    public function incrementChildren()
    {
        $this->children++;
    }

    public function decrementChildren()
    {
        if ($this->children > 0) {
            $this->children--;
        }
    }

    public function getTotalPrice()
    {
        return ($this->adults + $this->children) * $this->product['price'];
    }

    public function bookNow()
    {
        // Handle booking logic
        session()->flash('message', 'Booking functionality coming soon!');
    }

    public function render()
    {
        $metaDescription = substr(strip_tags($this->product['description']), 0, 160);
        $metaImage = $this->product['images'][0] ?? asset('logo.png');
        
        return view('livewire.product-detail', [
            'title' => $this->product['title'] . ' - Voyago',
            'description' => $metaDescription,
            'image' => $metaImage,
        ]);
    }
}

<?php

namespace App\Livewire\Auth;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Login extends Component
{
    public $email = '';

    public $password = '';

    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.auth.login', [
            'title' => 'Login - Voyago',
            'description' => 'Login to your Voyago account to book tours and manage your travel experiences.',
            'image' => asset('logo.png'),
        ]);
    }
}

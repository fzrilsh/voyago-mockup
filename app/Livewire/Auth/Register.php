<?php

namespace App\Livewire\Auth;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Register extends Component
{
    public $name = '';

    public $email = '';

    public $password = '';

    public $password_confirmation = '';

    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.auth.register');
    }
}

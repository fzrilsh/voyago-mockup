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
        return view('livewire.auth.login');
    }
}

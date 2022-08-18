<?php

namespace App\Http\Livewire\Includes;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use PhpParser\Builder\Function_;

class NavbarComponent extends Component
{
    public $user;

    public function mount()
    {
        $this->user = Auth::user();
    }

    public function render()
    {
        return view('livewire.includes.navbar-component');
    }

}

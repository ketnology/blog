<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class Gallery extends Component
{
    public function render()
    {
        return view('livewire.admin.gallery')->layout('layouts.master');
    }
}

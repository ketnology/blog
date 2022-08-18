<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class Invoice extends Component
{
    public function render()
    {
        return view('livewire.admin.invoice')->layout('layouts.master');
    }
}

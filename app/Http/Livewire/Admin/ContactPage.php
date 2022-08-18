<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class ContactPage extends Component
{
    public function render()
    {
        return view('livewire.admin.contact-page')->layout('layouts.master');
    }
}

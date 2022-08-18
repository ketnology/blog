<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class FaqPage extends Component
{
    public function render()
    {
        return view('livewire.admin.faq-page')->layout('layouts.master');
    }
}

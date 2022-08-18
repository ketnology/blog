<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class AboutPage extends Component
{
    public function render()
    {
        return view('livewire.admin.about-page')->layout('layouts.master');
    }
}

<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class FrontPage extends Component
{
    public function render()
    {
        return view('livewire.admin.front-page')->layout('layouts.masters');
    }
}

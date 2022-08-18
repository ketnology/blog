<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class PolicyPage extends Component
{
    public function render()
    {
        return view('livewire.admin.policy-page')->layout('layouts.master');
    }
}

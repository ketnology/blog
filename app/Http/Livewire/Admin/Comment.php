<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class Comment extends Component
{
    public function render()
    {
        return view('livewire.admin.comment')->layout('layouts.master');
    }
}

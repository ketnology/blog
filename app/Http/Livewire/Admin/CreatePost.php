<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class CreatePost extends Component
{
    // public $car = 'toyota';
    public $title;
    public $body;

    public function mount()
    {
        //
    }

    public function render()
    {
        return view('livewire.admin.create-post')->layout('layouts.master');
    }
}

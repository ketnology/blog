<?php

namespace App\Http\Livewire\Admin;

use App\Models\Post;
use Livewire\Component;

class PostIndex extends Component
{
    public $posts;
    public $photo;

    public function mount()
    {
        $this->posts = Post::all();
    }

    public function render()
    {
        return view('admin.post-index')->layout('layouts.master');
    }
}

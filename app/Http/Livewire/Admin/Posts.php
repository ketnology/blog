<?php

namespace App\Http\Livewire\Admin;

use App\Models\Post;
use Livewire\Component;

class Posts extends Component
{
    // public $post;

    // public function mount()
    // {
    //     $this->post = Post::all();
    // }

    public function render()
    {
        $posts  = Post::all();

        return view('livewire.admin.posts', compact('posts'))->layout('layouts.master');
        // return view('livewire.admin.posts')->layout('layouts.master');
    }
}

<?php

namespace App\Http\Livewire\Blog;

use App\Models\Post;
use Livewire\Component;

class Blog extends Component
{
    public $posts;

    public function mount()
    {
        $this->posts = Post::orderBy('created_at', 'desc')->get();
    }
    public function render()
    {
        return view('livewire.blog.blog');
    }
}

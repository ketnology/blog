<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view('home');
    }
}

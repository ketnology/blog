<?php

namespace App\Http\Livewire\Admin;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CreatePost extends Component
{
    public $user;
    public $post;
    public $title;
    public $body;
    public $message;

    protected $rules = [
        'title' => 'required|string|min:6',
        'body' => 'required|string|max:500',
    ];

    public function mount()
    {
        $this->user = Auth::user();
        $this->post = new Post();
    }

    public function save()
    {
        $this->validate();

        $this->post->user_id = $this->user->id;
        $this->post->title = $this->title;
        $this->post->body = $this->body;
        $this->post->save();
        redirect()->route('posts');

    }

    public function render()
    {
        return view('livewire.admin.create-post')->layout('layouts.master');
    }
}

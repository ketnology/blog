<?php

namespace App\Http\Livewire\Admin;

use App\Models\Image;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreatePost extends Component
{
    use WithFileUploads;

    public $user;
    public $post;
    public $title;
    public $body;
    public $photo;
    public $message;

    protected $rules = [
        'title' => 'required|string|min:6',
        'body' => 'required|string',
    ];

    public function mount()
    {
        $this->user = Auth::user();
        $this->post = new Post();
    }

    public function save()
    {
        $this->validate();

        $this->validate([
            'photo' => 'image|mimes:jpeg,png,jpg,gif|max:1024', // 1 MB size but it shoes 12288 kilobytes which is 12 MB
        ]);

        $this->photo = $this->photo->storePublicly('blog/post' . $this->post->id, 'public');

        $this->post->user_id = $this->user->id;
        $this->post->title = $this->title;
        $this->post->body = $this->body;

        $image = new Image();
        $image->post_id = $this->post->id;
        $image->filename = $this->photo;
        $image->save();
        $this->post->save();

        return Redirect::route('dashboard');
    }

    public function render()
    {
        return view('livewire.admin.create-post')->layout('layouts.master');
    }
}

<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class CreatePost extends Component
{
    // public $car = 'toyota';
    public $title;
    public $body;
    public $message;

    public Post $post;



    protected $rules = [

        'post.title' => 'required|string|min:6',

        'post.content' => 'required|string|max:500',

    ];

    public function save()

    {

        $this->validate();



        $this->post->save();

    }

    public function mount()
    {
        //
    }

    public function render()
    {
        return view('livewire.admin.create-post')->layout('layouts.master');
    }
}

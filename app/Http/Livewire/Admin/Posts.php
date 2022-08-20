<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class Posts extends Component
{
    public function render()
    {
        return view('livewire.admin.posts')->layout('layouts.master');
    }

    public function index()
    {
        $users = DB::table('posts')->select('id','title','body')->get();

        return view('')->with('users', $users);
    }
}

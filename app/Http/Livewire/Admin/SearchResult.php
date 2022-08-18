<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class SearchResult extends Component
{
    public function render()
    {
        return view('livewire.admin.search-result')->layout('layouts.master');
    }
}

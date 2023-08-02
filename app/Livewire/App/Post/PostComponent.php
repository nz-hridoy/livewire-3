<?php

namespace App\Livewire\App\Post;

use Livewire\Component;

class PostComponent extends Component
{
    public $todo;

    public function render()
    {
        return view('livewire.app.post.post-component')->layout('livewire.app.layouts.base');
    }
}

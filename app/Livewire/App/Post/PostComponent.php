<?php

namespace App\Livewire\App\Post;

use Livewire\Component;

class PostComponent extends Component
{
    public $title, $content;

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'title' => 'required',
            'content' => 'required',
        ]);
    }

    public function addPost()
    {
        $this->validate([
            'title' => 'required',
            'content' => 'required',
        ]);


    }

    public function render()
    {
        return view('livewire.app.post.post-component')->layout('livewire.app.layouts.base');
    }
}

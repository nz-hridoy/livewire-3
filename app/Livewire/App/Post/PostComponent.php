<?php

namespace App\Livewire\App\Post;

use Livewire\Component;
use Livewire\Attributes\Computed;

class PostComponent extends Component
{
    #[Computed]
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

    public function profile_data()
    {
        return 'Hello World';
    }

    public function render()
    {
        return view('livewire.app.post.post-component')->layout('livewire.app.layouts.base');
    }
}

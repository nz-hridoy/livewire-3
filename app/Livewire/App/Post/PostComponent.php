<?php

namespace App\Livewire\App\Post;

use Livewire\Component;
use Livewire\Attributes\Js;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Computed;

class PostComponent extends Component
{
    #[Computed]

    #[Rule('required')]
    public $title, $content;

    public function addPost()
    {
        $this->validate([
            'title' => 'required',
            'content' => 'required',
        ]);


    }

    #[Js]
    public function resetInputs()
    {
        return <<<'JS'
            $wire.title = '';
            $wire.content = '';
        JS;
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

<?php

namespace App\Livewire\Pages\Posts;

use App\Models\Post;
use Livewire\Attributes\Locked;
use Livewire\Component;

class Show extends Component
{
    #[Locked]
    public $slug;

    public function render()
    {
        $item = Post::select('title', 'description', 'content')
            ->where('slug', $this->slug)
            ->first();
        if (empty($item)) {
            abort(404);
        }

        return view('livewire.pages.posts.show', ['item' => $item]);
    }
}

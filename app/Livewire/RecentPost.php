<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class RecentPost extends Component
{
    private const LIMIT = 3;

    public $posts;

    public function mount()
    {
        $this->posts = Post::select('thumbnail', 'title', 'created_at', 'slug')
            ->orderBy('created_at', 'desc')
            ->limit(self::LIMIT)
            ->get();
    }

    public function render()
    {
        return view('livewire.recent-post');
    }
}

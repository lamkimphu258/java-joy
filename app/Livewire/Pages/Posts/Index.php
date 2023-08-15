<?php

namespace App\Livewire\Pages\Posts;

use App\Livewire\Pages\Traits\WithCustomPagination;
use App\Models\Post;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination, WithCustomPagination;

    public $search = '';

    /**
     * @return View|Factory
     */
    public function render(): View|Factory
    {
        $items = $this->buildQuery()->paginate(10);
        $featuredItems = Post::select('slug', 'title')
            ->where('is_featured', true)
            ->orderBy('created_at', 'desc')
            ->limit(5)
            ->get();

        return view(
            'livewire.pages.posts.index',
            [
                'items' => $items,
                'featuredItems' => $featuredItems,
            ]
        );
    }

    /**
     * @return Builder
     */
    private function buildQuery(): Builder
    {
        $query = Post::query()->select('title', 'description', 'slug');
        if (!empty($this->search)) {
            $query->where('title', 'like', "%$this->search%");
        }
        $query->orderBy('created_at', 'desc');
        return $query;
    }
}

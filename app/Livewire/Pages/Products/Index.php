<?php

namespace App\Livewire\Pages\Products;

use App\Livewire\Pages\Traits\WithCustomPagination;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\Computed;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination, WithCustomPagination;

    public $categoryId = 1;

    public $sort = 'latest';

    public $sortColumn = 'created_at';

    public $sortOrder = 'desc';

    #[Computed]
    public function categories()
    {
        return ProductCategory::select('id', 'name')->get();
    }

    public function render(): View|Factory
    {
        return view(
            'livewire.pages.products.index',
            [
                'products' => Product::select('id', 'title', 'price', 'thumbnail', 'slug')
                    ->where('category_id', $this->categoryId)
                    ->orderBy($this->sortColumn, $this->sortOrder)
                    ->paginate(15),
            ]
        );
    }

    public function updateSort()
    {
        switch ($this->sort) {
            case 'title_asc':
                $this->sortColumn = 'title';
                $this->sortOrder = 'asc';
                break;
            case 'title_desc':
                $this->sortColumn = 'title';
                $this->sortOrder = 'desc';
                break;
            case 'price_asc':
                $this->sortColumn = 'price';
                $this->sortOrder = 'asc';
                break;
            case 'price_desc':
                $this->sortColumn = 'price';
                $this->sortOrder = 'desc';
                break;
            default:
                $this->sortColumn = 'created_at';
                $this->sortOrder = 'desc';
        }
    }
}

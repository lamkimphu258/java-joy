<?php

namespace App\Livewire;

use App\Models\Product;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class FeaturedProduct extends Component
{
    private const LIMIT = 9;

    public $products;

    /**
     * @return void
     */
    public function mount(): void
    {
        $this->products = Product::where('is_featured', true)
            ->orderBy('created_at', 'desc')
            ->limit(self::LIMIT)
            ->get();
    }

    /**
     * @return View|Factory
     */
    public function render(): View|Factory
    {
        return view('livewire.featured-product');
    }
}

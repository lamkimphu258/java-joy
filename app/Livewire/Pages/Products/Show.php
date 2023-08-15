<?php

namespace App\Livewire\Pages\Products;

use App\Models\Product;
use App\Models\ProductVariant;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\Locked;
use Livewire\Component;

class Show extends Component
{
    #[Locked]
    public $slug;

    public $item;

    public $variants = [];

    public $price;

    public $activeSize = 'default';

    /**
     * @return void
     */
    public function mount()
    {
        $this->item = Product::select('id', 'slug', 'title', 'description', 'thumbnail', 'price')
            ->where('slug', $this->slug)
            ->first();
        if (empty($this->item)) {
            abort(404);
        }
        $this->price = $this->item->price;
        $this->variants['default'] = $this->item->price;
        $this->variants = array_merge($this->variants, ProductVariant::where('product_id', $this->item->id)
            ->pluck('price', 'size')->toArray());
    }

    /**
     * @return void
     * @param mixed $size
     */
    public function changeSize($size)
    {
        $this->price = $this->variants[$size];
        $this->activeSize = $size;
    }

    /**
     * @return View|Factory
     */
    public function render()
    {
        return view('livewire.pages.products.show');
    }
}

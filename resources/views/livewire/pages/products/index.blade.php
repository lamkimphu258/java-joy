@pushOnce('styles')
@vite(['resources/scss/pages/products/index.scss'])
@endPushOnce

<div class="w-container section">
    <div>
        <div class="flex flex-col space-y-8 md:space-y-0 md:flex-row justify-between">
            <select name="categories" class='product-filter' wire:change="updateSort" wire:model="categoryId">
                @foreach($this->categories as $category)
                <option class="category-item" value="{{ $category->id }}" wire:key={{ $category->id }}>{{ $category->name }}</option>
                @endforeach
            </select>
            <select name="sort" class='product-filter' wire:change="updateSort" wire:model="sort">
                @foreach(['latest' => 'latest', 'title_asc' => 'title (a->z)', 'title_desc' => 'title (z->a)', 'price_asc' => 'price: low to high', 'price_desc' => 'price: high to low'] as $sortKey=>$sortItem)
                <option class="sort-item" value="{{ $sortKey }}" wire:key={{ $sortKey }}>{{ $sortItem }}</option>
                @endforeach
            </select>
        </div>
        <div class="product-container">
            @if(!$products->total())
            <p class="no-content-message">No posts</p>
            @endempty

            @foreach ($products as $productIndex => $product)
            <div class="product-card" wire:key={{ $product->id }}>
                <p class="product-title">{{ $product->title }}</p>
                <p class="product-price">$ {{ $product->price }} USD</p>
                <img class="product-image" src="{{ $product->thumbnail }}" alt="Product Thumbnail" />
                <x-button content="View details" type="secondary" link="{{ route('products.show', ['slug' => $product->slug]) }}"></x-button>
            </div>
            @endforeach

        </div>

        {{ $products->links() }}
    </div>
</div>

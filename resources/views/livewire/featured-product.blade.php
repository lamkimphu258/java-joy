@pushOnce('styles')
@vite(['resources/scss/components/featured-product.scss'])
@endPushOnce

<div class="product-container animate__animated">
    @foreach ($products as $productIndex => $product)
    <div class="product-card" wire:key={{ $product->id }}>
        <p class="product-title">{{ $product->title }}</p>
        <p class="product-price">$ {{ $product->price }} USD</p>
        <img class="product-image" src="{{ $product->thumbnail }}" alt="Product Thumbnail" />
        <x-button content="View details" type="secondary" link="{{ 'products/' . $product->slug }}"></x-button>
    </div>
    @endforeach
</div>

@pushOnce('styles')
@vite(['resources/scss/pages/products/show.scss'])
@endPushOnce

<div id="detail" class="w-container">
    <img src="{{ '/' . $item->thumbnail }}" alt="Product image" id="image" />
    <div id="information">
        <h2 id="title">{{ $item->title }}</h2>
        <p id="description">{{ $item->description }}</p>
        <div>
            @foreach($variants as $size=>$v)
            <span wire:click="changeSize('{{$size}}')" @class(["size", "active"=> $activeSize === $size])>{{ $size }}</span>
            @endforeach
        </div>
        <p id="price">$ {{ $price }} USD</p>
    </div>
</div>

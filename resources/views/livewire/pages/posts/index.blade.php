@pushOnce('styles')
@vite(['resources/scss/pages/posts/index.scss'])
@endPushOnce

<div id="posts" class="w-container section">
    <input type="text" id="search" name="search" wire:model.live="search" placeholder="Find your post">
    <div id="posts-container">
        <div id="post-container">
            @empty($items->total())
            <p class="no-content-message">No posts</p>
            @endempty
            @foreach($items as $item)
            <div class="post" wire:key="{{ $item->slug }}">
                <a class="title" href="{{ route('posts.show', ['slug'=>$item->slug]) }}" alt="{{ $item->slug }}">{{ $item->title }}</a>
                <p class="description">{{ $item->description }}</p>
            </div>
            @endforeach

            <div>
                {{ $items->links() }}
            </div>
        </div>
        <div class="vertical-line"></div>
        <div id="featured-posts">
            @if($featuredItems->isEmpty())
            <p class="no-content-message">No featured posts</p>

            @else

            <h2 id="title">You may like</h2>

            @foreach($featuredItems as $featuredItem)
            <div wire:key="{{ $featuredItem->slug }}">
                <a href="/posts/{{ $featuredItem->slug }}" atl="{{ $featuredItem->slug }}" class="featured-item">{{ $featuredItem->title }}</a>
            </div>
            @endforeach

            @endif
        </div>
    </div>
</div>

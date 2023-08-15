@push('styles')
@vite(['resources/scss/components/recent-post.scss'])
@endpush

<div class='post-container animate__animated'>
    @foreach($posts as $post)
    <div class="post" wire:key={{ $post->id }}>
        <a href="{{ route('posts.show', ['slug'=>$post->slug]) }}" alt="Post thumbnail" class="post-thumbnail-container">
            <img class="post-thumbnail" src="{{ $post->thumbnail }}.png" alt="Post thumbnail" />
        </a>
        <p class="post-created-at">{{ $post->created_at->format('M d, Y') }}</p>
        <a href="{{ route('posts.show', ['slug'=>$post->slug]) }}" alt="Post title" class="cursor-pointer">
            <h2 class="post-title">{{ $post->title}}</h2>
        </a>
    </div>
    @endforeach
</div>

@pushOnce('styles')
@vite(['resources/scss/pages/posts/show.scss'])
@endPushOnce

<div class="w-container section">
    <h2 class="section-title">{{ $item->title }}</h2>
    <div class="content">
        {!! $item->content !!}
    </div>
</div>

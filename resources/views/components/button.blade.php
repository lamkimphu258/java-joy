<a href="{{ $link ?? '' }}" alt="Link" wire:navigate>
    <button {{ $attributes->merge(['class' => 'btn btn-'.$type]) }} {{ $attributes }}>
        {{ $content }}
    </button>
</a>

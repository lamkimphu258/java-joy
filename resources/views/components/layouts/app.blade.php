<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="{{ $metaDescription ?? 'Coffee and blog website' }}">
    <meta name="keywords" content="{{ $metaKeywords ?? 'coffee, blog' }}">
    <meta name="author" content="LKP">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inconsolata&family=Oswald&display=swap" rel="stylesheet">
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])

    @stack('styles')
    @stack('scripts')

    <title>{{ $title ?? 'Java Joy' }}</title>
</head>

<body>
    <x-partials.navbar />
    <main id="main">
        {{ $slot }}
    </main>
    <x-partials.footer />
</body>

</html>

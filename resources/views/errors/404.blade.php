<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inconsolata&family=Oswald&display=swap" rel="stylesheet">
    @vite(['resources/scss/app.scss'])

    <title>404</title>
</head>

<body>
    <div class="min-h-screen bg-primaryColor grid grid-cols-1 items-center">
        <div class="flex flex-col gap-y-8 items-center">
            <h1 class="text-6xl text-primaryBlack font-bold uppercase">not found</h1>
            <svg width="400px" height="200px" viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg">
                <path d="M7 14A7 7 0 1 1 7 0a7 7 0 0 1 0 14z" />
                <path d="M7 13A6 6 0 1 0 7 1a6 6 0 0 0 0 12z" fill="#FFF" style="fill: var(--svg-status-bg, #fff);" fill-rule="nonzero" />
                <path d="M8.16 7.184c.519-.37.904-.857 1.07-1.477.384-1.427-.619-2.897-2.246-2.897-.732 0-1.327.26-1.766.692a2.163 2.163 0 0 0-.509.743.75.75 0 0 0 1.4.54.78.78 0 0 1 .16-.213c.168-.165.39-.262.715-.262.597 0 .936.496.798 1.007-.067.249-.235.462-.492.644-.231.165-.47.264-.601.3a.75.75 0 0 0-.556.724v1.421a.75.75 0 0 0 1.5 0v-.909c.168-.082.346-.185.526-.313z" fill-rule="nonzero" />
                <ellipse cx="6.889" cy="10.634" rx="1" ry="1" />
            </svg>
            <a href="{{ route('welcome') }}" class="bg-primaryBlack text-white max-w-xs rounded-md p-4 uppercase border border-primaryBlack hover:bg-primaryColor hover:text-primaryBlack duration-300">Back to homepage</a>
        </div>
    </div>
</body>

</html>

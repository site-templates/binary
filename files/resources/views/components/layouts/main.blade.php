@props([
    'title' => 'Sander Vos — Design engineer',
    'description' => 'Design engineer in Amsterdam. I build interfaces, and I write about the parts that were harder than they looked.',
    'current' => '/',
    'showFooter' => '1',
])
<!DOCTYPE html>
<html lang="en" class="antialiased">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    <meta name="description" content="{{ $description }}">
    <meta property="og:title" content="{{ $title }}">
    <meta property="og:description" content="{{ $description }}">
    <link rel="icon" href="/favicon.png" type="image/png">
    <link rel="apple-touch-icon" href="/favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fragment+Mono&family=Schibsted+Grotesk:wght@400;500&display=swap" rel="stylesheet">
    <script>
        /* The theme is stamped on the root element before anything paints, so
           the site never flashes the wrong half. An untouched visitor gets
           their system setting; once they press the switch, their choice wins
           and `light` blocks the prefers-color-scheme fallback in the CSS. */
        (function () {
            try {
                var stored = localStorage.getItem('binary:theme');
                var dark = stored ? stored === 'dark' : window.matchMedia('(prefers-color-scheme: dark)').matches;
                document.documentElement.classList.add(dark ? 'dark' : 'light');
            } catch (error) {}
        })();
    </script>
    @vite(['resources/css/site.css'])
</head>
<body class="isolate bg-canvas font-sans text-ink">
    <a href="#main" class="sr-only focus:not-sr-only focus:fixed focus:top-4 focus:left-4 focus:z-50 focus:rounded-lg focus:bg-ink focus:px-4 focus:py-2 focus:text-base focus:text-canvas">Skip to content</a>

    <x-nav :current="$current"/>

    <main id="main">
        {{ $slot }}
    </main>

    @if ($showFooter)
        <x-footer/>
    @endif

    <script src="/js/main.js" defer></script>
</body>
</html>

@props([
    'code' => '404',
    'title' => 'Nothing here',
    'body' => 'The page you were after has either moved or never existed. Both happen.',
    'linkLabel' => 'Back to the beginning',
    'linkUrl' => '/',
])
<section class="mx-auto flex min-h-[60svh] max-w-[40rem] flex-col items-center justify-center px-6 py-20 text-center">
    <p class="font-mono text-sm text-muted tabular-nums">{{ $code }}</p>
    <h1 class="display-page mt-3 font-display text-balance">{{ $title }}</h1>
    <p class="mt-4 max-w-[46ch] text-base/7 text-pretty text-muted sm:text-[0.9375rem]/7">{{ $body }}</p>
    <p class="mt-6 text-base sm:text-[0.9375rem]">
        <a href="{{ $linkUrl }}" class="link font-medium">{{ $linkLabel }}</a>
    </p>
</section>

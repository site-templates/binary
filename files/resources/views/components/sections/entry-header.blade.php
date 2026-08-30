@props([
    'title' => '',
    'description' => '',
    'dateFormatted' => '',
    'readTime' => '',
    'backLabel' => 'Writing',
    'backUrl' => '/writing',
    'showBack' => '1',
])
<section class="mx-auto max-w-[40rem] px-6 pt-10 pb-2 sm:pt-14">
    @if ($showBack)
        <a href="{{ $backUrl }}" class="row inline-flex items-start gap-1.5 text-base text-muted hover:text-ink sm:text-[0.9375rem]">
            <svg viewBox="0 0 16 16" class="size-4 h-lh shrink-0 fill-current" aria-hidden="true">
                <path d="M13 8a.75.75 0 0 0-.75-.75H5.06l2.72-2.72a.75.75 0 0 0-1.06-1.06L2.97 7.22a.75.75 0 0 0 0 1.06l3.75 3.75a.75.75 0 1 0 1.06-1.06L5.06 8.25h7.19A.75.75 0 0 0 13 8Z"/>
            </svg>
            {{ $backLabel }}
        </a>
    @endif

    <p class="mt-8 flex flex-wrap items-baseline gap-x-3 font-mono text-sm text-muted tabular-nums">
        <span>{{ $dateFormatted }}</span>
        <span aria-hidden="true">·</span>
        <span>{{ $readTime }}</span>
    </p>

    <h1 class="display-page mt-3 font-display text-balance">{{ $title }}</h1>
    <p class="mt-4 max-w-[62ch] text-base/7 text-pretty text-muted sm:text-[0.9375rem]/7">{{ $description }}</p>
</section>
